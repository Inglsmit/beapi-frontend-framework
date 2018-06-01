/**
 * Main scripts file
 */
import './polyfill/picturefill'
import './polyfill/forEach'
import lazySizes from 'lazysizes'
import lazySizesBgset from 'lazysizes/plugins/bgset/ls.bgset'

import Menu from './src/menu'
import ButtonLink from './src/button-href'
import Select from './src/select'
import SeoLink from './src/seo'
import AccessibilityTests from './src/accessibility-tests'
import ScrollFire from './src/scrollFire'

const menu = new Menu()
menu.init()
menu.sfMenuInit()

ButtonLink.bind('button[data-href]')

const selects = ['.gform_wrapper select:not([multiple])']
selects.forEach(el => Select.bind(el))

SeoLink.bind('[data-seo]')

const scrollFire = new ScrollFire()
scrollFire.init()

/**
 * LazySizes configuration
 * https://github.com/aFarkas/lazysizes/#js-api---options
 */
lazySizes.customMedia = {}

/**
 * LazySizesBgset configuration
 * https://github.com/aFarkas/lazysizes/tree/gh-pages/plugins/bgset#lazysizes-bgset-extension---responsive-background-images
 */
lazySizesBgset.customMedia = {}

/**
 * Load SVG sprite and automate a11y tests only in our dist folder
 */
const distPath = window.location.pathname

if (distPath.match('/dist/').length === 1) {
  // a11y
  const accessibilityTests = new AccessibilityTests()
  accessibilityTests.init()

  // SVG
  let __svg__ = {
    path: '../img/icons/*.svg', // entry
    name: '../icons/icons.svg', // output
  }
  require('./vendor/svgxhr')(__svg__)
}
