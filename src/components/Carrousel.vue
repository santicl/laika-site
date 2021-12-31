<template>
  <div class="carrousel">
    <ul>
      <li>
        <img
          src="https://laikapp.s3.amazonaws.com/dev_images_banners/1638831302PKC-HOME-1750X300%20%281%29.jpg"
          alt=""
        />
      </li>
      <li>
        <img
          src="https://laikapp.s3.amazonaws.com/dev_images_banners/1635557070banner-1750x200-concurso-equi-felino.jpg"
          alt=""
        />
      </li>
      <li>
        <img
          src="https://laikapp.s3.amazonaws.com/dev_images_banners/1639782827BANNER%20%281%29.jpg"
          alt=""
        />
      </li>
      <li>
        <img
          src="https://laikapp.s3.amazonaws.com/dev_images_banners/1638328921Mesa%20de%20trabajo%201%20copia%2098%20%281%29.png"
          alt=""
        />
      </li>
      <li>
        <img
          src="https://laikapp.s3.amazonaws.com/dev_images_banners/1640233482Post_laika_Final_HB%20%281%29.jpg"
          alt=""
        />
      </li>
      <li>
        <img
          src="https://laikapp.s3.amazonaws.com/dev_images_banners/1638497638BREED%20PUPPY%20_euk%20%281%29.jpg"
          alt=""
        />
      </li>
      <li>
        <img
          src="https://laikapp.s3.amazonaws.com/dev_images_banners/1639579150concurso%20fin%20de%20a%C3%B1o%20BANNER%20%282%29%20%281%29.jpg"
          alt=""
        />
      </li>
      <li>
        <img
          src="https://laikapp.s3.amazonaws.com/dev_images_banners/1637193899campa%C3%B1as%20nuevas%20diferenciales%20Camilo_Mesa%20de%20trabajo%201%20copia%2020%20copy%202.png"
          alt=""
        />
      </li>
      <li>
        <img
          src="https://laikapp.s3.amazonaws.com/dev_images_banners/1640361064banner-1750x300-multimarca-aseo-belleza.jpg"
          alt=""
        />
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "Carrousel",
};
</script>
<style scoped>
* {
  padding: 0px;
  margin: 0px;
}
.carrousel {
  width: 90%;
  margin: auto;
  overflow: hidden;
}

.carrousel ul{
    display: flex;
    padding: 0;
    width: 900%;
    animation: change 19s infinite alternate;
}

.carrousel li{
    width: 100%;
    list-style: none;
}

.carrousel img{
    width: 100%;
}

@keyframes change {
    0%, 20%{
        margin-left: 0;
    }
    25%, 40%{
        margin-left: -100%;
    }
    50%, 70%{
        margin-left: -200%;
    }
    75%, 100%{
        margin-left: -300%;
    } 
}

</style>
