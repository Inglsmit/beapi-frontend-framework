const fs = require('fs')
const im = require('@beapi/imagemagick')
const sizeOf = require('image-size')
const IMAGE_DIR = './src/img/sample/'
const IMAGE_DST_DIR = './dist/assets/img/sample/'
let dataLocation = {}

/**
 * Add width and height datas from TPL sources files in conf-img
 * @param {object} dataLocation The object that contains all image sizes and image locations listed in conf-img
 */
const addSizesMedia = dataLocation => {
  Object.keys(dataLocation).map(key => {
    dataLocation[key].medias = {}

    const templateFile = fs.readFileSync('./src/conf-img/tpl/' + key + '.tpl', 'utf8')
    let sources = templateFile.split('<source')

    sources.splice(0, 1)

    for (let i = 0; i < sources.length; i++) {
      sources[i] = sources[i]
        .replace('\n', '')
        .replace('%%srcset%%', '')
        .replace('/>', '')
    }

    let mediasList = []

    /**
     * Map <source /> per *.tpl files
     */

    sources.map(source => {
      let media = '*'

      if (source.includes('media')) {
        media = source
          .match(/media=.*"/gm)[0]
          .replace('media="', '')
          .replace('"', '')
      }

      mediasList.push(media)

      /**
       * Add mediasList Array
       */
      dataLocation[key].medias.mediasList = mediasList

      /**
       * Add size values per medias
       */
      dataLocation[key].medias[media] = source
        .match(/data-srcset=.*2x/gm)[0]
        .replace('data-srcset="', '')
        .replace(/%%/g, '')
        .replace(',', '')
        .replace('2x', '')
        .split(' ')
        .slice(0, -1)
    })
  })

  return dataLocation
}

/**
 * Generate Cropped Image with images locations and images sizes list in conf-img
 * @param {object} dataLocation The object that contains all image sizes and image locations listed in conf-img
 */
const generateCroppedImages = dataLocation => {
  let imageFiles = fs
    .readdirSync(IMAGE_DIR)
    .filter(file => /\.(png|jpe?g|gif)$/.test(file))
    .map(file => IMAGE_DIR + file)

  imageFiles.forEach(imageFile => {
    Object.keys(dataLocation).forEach(key => {
      Object.keys(dataLocation[key])
        .filter(size => size !== 'medias')
        .map(size => {
          const filename = imageFile.replace(IMAGE_DIR, '')
          const imageExtension = filename.match(/\.[^/.]+$/)[0]
          const dstFilename = filename.replace(/\.[^/.]+$/, '') + size.replace('img', '') + imageExtension

          fs.access(IMAGE_DST_DIR + dstFilename, fs.constants.F_OK, err => {
            if (err) {
              const dimensions = sizeOf(imageFile)
              const width =
                dataLocation[key][size]['width'] > dimensions.width
                  ? dimensions.width
                  : dataLocation[key][size]['width']
              const height =
                dataLocation[key][size]['height'] > dimensions.height
                  ? dimensions.height
                  : dataLocation[key][size]['height']

              im.crop(
                {
                  srcPath: imageFile,
                  dstPath: IMAGE_DST_DIR + dstFilename,
                  width,
                  height,
                  strip: false,
                  resizeStyle: 'aspectfit',
                  quality: 1,
                  gravity: 'Center',
                },
                function() {
                  console.log('\x1b[32m\x1b[1m', '✂️ Cropping ' + dstFilename)
                }
              )
            }
          })
        })
    })
  })
}

module.exports = () => {
  const datas = fs.readFileSync('./src/conf-img/image-locations.json', 'utf8')
  const parsedDatas = JSON.parse(datas)

  parsedDatas.map(data => {
    Object.keys(data).map(key => {
      dataLocation[key] = {}

      const srcSets = data[key][0].srcsets

      srcSets.map(srcSet => {
        dataLocation[key][srcSet.size] = {
          width: parseInt(srcSet.size.split('-')[1]),
          height: parseInt(srcSet.size.split('-')[2]),
        }
      })
    })
  })

  dataLocation = addSizesMedia(dataLocation)
  generateCroppedImages(dataLocation)

  return dataLocation
}
