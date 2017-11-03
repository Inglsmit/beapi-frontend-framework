/**
* lazy loads elements with default selector as '.lozad'
*/
require('intersection-observer')
const lozad = require('lozad')

const observer = lozad() // lazy loads elements with default selector as '.lozad'
observer.observe()