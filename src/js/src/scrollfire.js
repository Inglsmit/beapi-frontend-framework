import inView from 'in-view'

class ScrollFire {
  constructor() {
    this.el = '.fadeIn'
  }
  init() {
    inView(this.el).on('enter', el => {
      el.classList.add('done')
    })
  }
}

export default ScrollFire
