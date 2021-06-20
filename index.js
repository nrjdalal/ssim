const routes = document.getElementsByClassName('route')
let count = 0
let anime = gsap.fromTo('.route', { rotation: 20, x: 100 }, { rotation: 0, x: 0, duration: 7 })

// let changeRoute = setInterval(() => {
//   routes[count].classList.add('hidden')
//   count = (count + 1) % (routes.length - 1)
//   console.log(count, routes.length)
//   routes[count].classList.remove('hidden')
//   gsap.fromTo('.route', { rotation: 20, x: 100 }, { rotation: 0, x: 0, duration: 5 })
//   setInterval(() => {
//     gsap.fromTo('.route', { rotation: 0, x: 0 }, { rotation: 20, x: 100, duration: 5 })
//   }, 5000)
// }, 10000)

// gsap.fromTo('.route', { rotation: 20, x: 100 }, { rotation: 0, x: 0, duration: 7 })
