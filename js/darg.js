const cartItems = [...document.querySelectorAll(".cart [class*='item']")]
const drop = document.querySelector('.drop');

cartItems.forEach((e) => {
  e.setAttribute("draggable", true)

  e.addEventListener("dragstart", (event) => {
    const data = event.dataTransfer.setData("html", e.innerHTML)
  })

})

drop.addEventListener("dragover", (e) => {
  // const data = e.dataTransfer.getData("html")
  e.preventDefault()
})

drop.addEventListener("drop", (e) => {
  const data = e.dataTransfer.getData("html")
  const newBox = document.createElement("div")
  newBox.classList.add("item")
  newBox.innerHTML += data
  newBox.querySelector(".content").innerHTML += `<input type='number'/>`

  drop.appendChild(newBox)
})
