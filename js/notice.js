const notices = $("div.tbody")
const noticeContainer = $(".notice-con")
const page = $(".page")
let type = "all"
let date = "DESC"
let len = 0;
let index = 1;


function moveRight() {
  if (index < len) {
    ++index
    noticeContainer.style.transform = `translateX(${-1400 * index}px)`
  }
  page.textContent = index
}
function moveLeft() {
  if (index >= 1) {
    --index
    noticeContainer.style.transform = `translateX(${-1400 * index}px)`

  }
  page.textContent = index
}


const innerHt = (arr) => {
  noticeContainer.innerHTML = ""
  len = parseInt(arr.length / 6);
  index = 1

  if (len === 3) {
    len = 2
  }
  noticeContainer.style.transform = `translateX(0px)`
  page.textContent = index

  console.log(len)

  arr.forEach(e => {
    const newBox = document.createElement("div")
    newBox.classList.add("notice")
    newBox.innerHTML += `
                <p>${e.type}</p>
                <p>${e.title}</p>
                <p>${e.date}</p>
              `
    noticeContainer.append(newBox)

  });

}

fetch(`./notice.php?type=${type}&date=${date}`)
  .then(res => res.json())
  .then(data => {
    innerHt(data)
  })


function desc() {
  date = "DESC"
  fetch(`./notice.php?type=${type}&date=${date}`)
    .then(res => res.json())
    .then(data => {
      innerHt(data)
    })
}

function asc() {
  date = "ASC"
  fetch(`./notice.php?type=${type}&date=${date}`)
    .then(res => res.json())
    .then(data => {
      innerHt(data)
    })
}

function normarl() {
  type = "일반"
  fetch(`./notice.php?type=${type}&date=${date}`)
    .then(res => res.json())
    .then(data => {
      innerHt(data)
    })
}
function even() {
  type = "이벤트"
  fetch(`./notice.php?type=${type}&date=${date}`)
    .then(res => res.json())
    .then(data => {
      innerHt(data)
    })
}