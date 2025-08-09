

const login = $(".login")
const reg = $(".reg")
const loginOpen = $(".loginOpen")
const regOpen = $(".regOpen")

loginOpen.addEventListener("click", (e) => {
  const block = e2 => login.style.display = e2
  if (login.style.display == "block") {
    block("none")
  } else {
    block("block")
  }
})
regOpen.addEventListener("click", (e) => {
  const block = (e2) => reg.style.display = e2
  if (reg.style.display === "block") {
    block("none")
  } else {
    block("block")
  }
})

function if1() {
  login.addEventListener("load", () => {
    const iframe = login.contentDocument;

    console.log(iframe)

    iframe.querySelector("input[type='submit']").addEventListener("click", () => {

      setTimeout(() => {
        location.reload();
      }, 1000);

    })
  })

}




if1()