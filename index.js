const routes = document.getElementsByClassName('route')
let count = 0

let changeRoute = setInterval(() => {
  routes[count].classList.add('hidden')
  count = (count + 1) % (routes.length - 1)
  routes[count].classList.remove('hidden')
}, 5000)
