<template>
  <section>
    <h2>Marcas Destacadas</h2>
    <div class="container-featured-brands">
      <img
        src="https://laikapp.s3.amazonaws.com/dev_images_categories/hills_circulo4.png"
        alt=""
      />
      <img
        src="https://laikapp.s3.amazonaws.com/dev_images_categories/1592410196_SALVAJE_FOOD_SAS__1226X1028.PNG"
        alt=""
      />
      <img
        src="https://laikapp.s3.amazonaws.com/dev_images_categories/1592410196_SALVAJE_FOOD_SAS__1226X1028.PNG"
        alt=""
      />
      <img
        src="https://laikapp.s3.amazonaws.com/dev_images_categories/1624564683IMG_0153.png"
        alt=""
      />
      <img
        src="https://laikapp.s3.amazonaws.com/images_categories/1589395980_ROYAL_CANIN_500X500.png"
        alt=""
      />
      <img
        src="https://s3.us-east-1.amazonaws.com/laikapp/images_categories/total_max_circulo2.png"
        alt=""
      />
    </div>
  </section>
</template>

<script>
export default {
  name: "FeaturedBrands",
};
</script>

<style scoped>
* {
  margin: 0px;
  padding: 0px;
}
section .container-featured-brands {
    justify-content: center;
    align-items: center;
}

section h2{
    margin-left: 70px;
    margin-top: 70px;
    color: #603e85;
}
.container-featured-brands {
  display: flex;
  justify-content: space-between;
  margin-left: 200px;
  margin-right: 200px;
}

.container-featured-brands img {
    width: 100px;
    margin-right: 35px;
    margin-top: 15px;
    border-radius: 50%;
}


</style>
