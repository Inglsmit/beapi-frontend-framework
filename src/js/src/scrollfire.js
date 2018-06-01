import inView from 'in-view'

class ScrollFire {
  constructor() {
    this.el = '.animate'
  }
  init() {
    inView(this.el).on('enter', el => {
      el.classList.add('in-view')
    })
    inView(this.el).on('exit', el => {
      el.classList.remove('in-view')
    })
    inView.threshold(0.5)
  }
}

export default ScrollFire
