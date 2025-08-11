const $ = e => document.querySelector(e)
const $$ = e => [...document.querySelectorAll(e)]

const ctrls = $$("[class*='ctrl']")
const video = $("video")
const ctrlContainer = $(".controls")
let isAuto = localStorage.getItem("auto") === "true"



if (isAuto) {
  video.muted = true
  video.play()
}

const controls = {
  ctrl01: () => { video.play() },
  ctrl02: () => { video.pause() },
  ctrl03: () => {
    video.pause()
    video.currentTime = 0
  },
  ctrl04: () => { video.currentTime -= 10 },
  ctrl05: () => { video.currentTime += 10 },
  ctrl06: () => { video.playbackRate -= 0.1 },
  ctrl07: () => { video.playbackRate += 0.1 },
  ctrl08: () => { video.playbackRate = 1 },
  ctrl09: () => {
    video.loop = !video.loop
  },
  ctrl10: () => {
    isAuto = !isAuto;
    localStorage.setItem("auto", isAuto);
  },
  ctrl11: () => {
    ctrlContainer.style.display = ctrlContainer.style.display === "none" ? "block" : "none"
  },
}

ctrls.forEach(e => {
  e.addEventListener("click", () => {

    if (controls[e.className]) {
      controls[e.className]()
    }

  })
});

const modal = $("dialog")
const openModal = $(".openModal")
const closeModal = $(".close")
const userId = $(".user-Id")
const cartContianer = $(".cart")
let dropItems = $$(".drop .items")
openModal.addEventListener("click", () => modal.style.display = 'flex')
closeModal.addEventListener("click", () => modal.style.display = 'none')
let cate = "건강식품";
let items = $$(".cart .item")

let userName = "";
let Cost = 0;

function gen() {
  const text = "QWERTYUIOPASDFGHJKLZXCVBNM1234567890".split("")
  for (let i = 0; i < 6; i++) {
    const random = Math.floor(Math.random() * text.length)
    userId.textContent += text[random]
    userName += text[random]
  }
}

gen()

function draggable() {
  items = $$('.cart .item')

  items.forEach((e, i) => {
    e.draggable = true
  })

  items.forEach((e) => {
    e.addEventListener("dragstart", (event) => {
      event.dataTransfer.setData("text/plain", e.outerHTML)
      event.dataTransfer.setData("id", e.querySelector("img").alt)
      console.log(e)
    })
  })
}


function dragAndDrop() {
  const drop = $(".drop")
  items = $$('.cart .item')
  const getParent = (e) => document.querySelector(`.drop .item:has(img[alt='${e}'])`)

  drop.addEventListener("dragover", (event) => {
    event.preventDefault()
  })




  drop.addEventListener("drop", (event) => {

    event.preventDefault()
    const data = event.dataTransfer.getData("text/plain")
    const id = event.dataTransfer.getData("id")
    const origi = $(`.cart .item:has(img[alt="${id}"])`)

    origi.style.opacity = 0.5

    const newDiv = document.createElement('div')
    newDiv.innerHTML = data
    newDiv.classList.add("remove")

    if (!getParent(id)) {
      newDiv.draggable = true
      drop.appendChild(newDiv)
    };

    if (!getParent(id).querySelector(".count")) {
      const test = document.createElement('div')
      test.innerHTML = `
      <div class="count">
      <input type="number" min="1" value="1" onchange='caluPrice()' onInput='caluPrice()'/>
      </div>
      <div >총가격: <span class="totalPrice"></span></div>
      `



      getParent(id).querySelector(".item-content").appendChild(test)
    } else {
      getParent(id).querySelector("input").value = parseInt(getParent(id).querySelector("input").value) + 1
    }

    $$(".drop .item").forEach((event) => {
      event.addEventListener("dragstart", (e2) => {
        const dropId = e2.dataTransfer.setData("dropID", event.querySelector("img").alt)
      })
    })


    $("body").addEventListener("drop", (event) => {
      event.preventDefault()

      if (event.target.classList.contains("drop") || event.target.closest(".drop")) return;
      const dropID = event.dataTransfer.getData("dropID")
      $(`.drop .item:has(img[alt="${dropID}"])`)?.closest(".remove").remove()
      if ($(`.cart .item:has(img[alt="${dropID}"])`)) {
        $(`.cart .item:has(img[alt="${dropID}"])`).style.opacity = 1
      }
      caluPrice()
    })

    $("body").addEventListener("dragover", (event) => {
      event.preventDefault()
    })




    caluPrice()
  })
}


$$(".category > div").forEach((e) => {
  e.addEventListener("click", () => {
    $$(".category > div").forEach((e2) => {
      e2.classList.remove("active")
    })
    cate = e.textContent
    e.classList.add("active")
    cart()
    items = $$(".cart .item")
  })
})

function caluPrice() {
  const itemsInDrop = $$(".drop .item")
  let All = 0;
  itemsInDrop.forEach((e) => {
    let total = parseInt(e.querySelector("input").value) * parseInt(e.querySelector(".price").textContent.replace(/[^0-9]/g, ""))
    if (!total) total = 0;
    e.querySelector(".totalPrice").textContent = total.toLocaleString('en-us')
    All += total
  })

  $(".cost").textContent = All.toLocaleString('en-us')
  Cost = All
  All = 0
}

async function cart() {
  fetch("./data.json")
    .then(res => res.json())
    .then(data => {
      cartContianer.innerHTML = ''

      Object.keys(data[cate]).forEach((e) => {
        const item = data[cate][e]
        cartContianer.innerHTML += `
               <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/${cate}/${e}.PNG"
                alt="${cate}-${e}"
                title="${cate}-${e}"
              />
            </div>
            <div class="item-content">
              <div class="name">${item.title}</div>
              <div class="item-price">
                가격:
                <span class="price">${item.price}</span>
              </div>
            </div>
          </div>
         `
      })

      dropItems = $$(".drop .item")

      dropItems.forEach((e) => {
        const itemID = e.querySelector("img").alt;

        if ($(`.cart img[alt="${itemID}"]`)) {
          console.log($(`.cart .item:has(img[alt="${itemID}"])`).style.opacity = 0.5)
        }
      })

      draggable()
    })
}



function userBuy() {
  const notice = $(".buyAlert")
  notice.style.display = 'flex'
  $(".user").textContent = userName
  $(".userCost").textContent = Cost
  modal.style.display = 'none'
  setInterval(() => {

    notice.style.display = 'none'
  }, 3000);
}


cart()
dragAndDrop()

const cartBtns = $$(".get")

cartBtns.forEach((e) => {
  e.addEventListener("click", (event) => {
    fetch(`./addCart.php?id=${e.closest(".item").getAttribute("data-id")}`)
      .then(data => {
        console.log(data.status == 200)
      })
  })
})
