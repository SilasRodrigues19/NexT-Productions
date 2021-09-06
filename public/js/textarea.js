const textArea = document.querySelector('#description');
const count = document.querySelector('.count');

textArea.addEventListener("keyup", e => {
    textArea.style.height = "auto";

    let scrollHeight = e.target.scrollHeight;

    textArea.style.height = `${ scrollHeight }px`;
});


function countLetters() {
  const text = textArea.value;
  const textLength = textArea.value.length;
  count.innerText = `${ textLength }`;
}