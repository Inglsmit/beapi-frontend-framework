import inView from 'in-view'

class ScrollFire {
  constructor() {
    this.el = '.entry__item'
  }
  init() {
    inView(this.el).on('enter', el => {
      el.classList.add('entry--visible')
    })
    inView.threshold(0.5)
  }
}

export default ScrollFire
