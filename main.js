import './style.css';
const article = document.querySelector('#article');

const data = [
  {
    imageStory: "https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/c08d8e88899493.5eb55618dcf81.jpg",
    storyName: "Nom de l'anecdote",
    story: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repellat eius nam voluptatibus asperiores ducimus quia optio facilis accusamus quisquam, expedita doloribus nulla vitae deleniti.",
    imageProfile: "https://scx2.b-cdn.net/gfx/news/hires/2018/2-detectingfak.jpg",
    author: "Jade MADISON",
    date: "12/05/2024"
  },

  {
    imageStory: "https://i.pinimg.com/originals/41/fc/7c/41fc7c51d5d26ff77cc0f7c80d870ee1.png",
    storyName: "Nom de l'anecdote #2",
    story: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repellat eius nam voluptatibus asperiores ducimus quia optio facilis accusamus quisquam, expedita doloribus nulla vitae deleniti.",
    imageProfile: "https://i.pinimg.com/736x/35/1c/d5/351cd5ccf456bd73dbd7830ada064f46.jpg",
    author: "Alice DUBRAKMAR",
    date: "04/01/2025"
  }
];

for (let i = 0; i < data.length; i++) {
  article.innerHTML = `
    <figure class="image-wrapper">
      <img src="${data[i].imageStory}" alt="" />
    </figure>
    <div class="content">
      <h2>${data[i].storyName}</h2>
      <p class="resume">${data[i].story}</p>
            
      <div class="profile">
        <img src="${data[i].imageProfile}" class="pp" alt="Image profile">
        <div>
          <a href="" class="name">${data[i].author}</a>
          <p class="date">${data[i].date}</p>
        </div>
      </div><br>

      <div class="link">
        <a href="">Voir plus</a>
        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="none" stroke="#9c9b9b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6 6l6-6m-6-6l6 6"/></svg>
      </div>
    </div>
  `
}