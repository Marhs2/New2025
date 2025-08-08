const mottos = [...document.querySelectorAll(".mottos > div")]
const dess = e => document.querySelector(`.desContianer > .${e} `)


mottos.forEach((e) => {
  e.addEventListener("mouseenter", () => {
    dess(e.className).style.opacity = 1
    mottos.forEach((e2) => e2.style.backgroundImage = `url("./img/motto/${e.className}.png")`)
  })

  e.addEventListener("mouseleave", () => {
    dess(e.className).style.opacity = 0
    mottos.forEach((e2) => e2.style.backgroundImage = `url("./img/motto/${e2.className}.png")`)
  })
})