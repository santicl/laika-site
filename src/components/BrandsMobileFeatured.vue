<template>
    <section>
    <h2>Marcas Destacadas</h2>
    <div class="container-featured-brands">
      <div>
        <img
        src="https://laikapp.s3.amazonaws.com/dev_images_categories/hills_circulo4.png"
        alt=""
      />
      </div>

      <div>
        <img
        src="https://laikapp.s3.amazonaws.com/dev_images_categories/1592410196_SALVAJE_FOOD_SAS__1226X1028.PNG"
        alt=""
      />
      </div>
      
      <div>
        <img
        src="https://laikapp.s3.amazonaws.com/dev_images_categories/1592410196_SALVAJE_FOOD_SAS__1226X1028.PNG"
        alt=""
      />
      </div>
      
      <div>
        <img
        src="https://laikapp.s3.amazonaws.com/dev_images_categories/1624564683IMG_0153.png"
        alt=""
      />
      </div>
      
      <div>
        <img
        src="https://laikapp.s3.amazonaws.com/images_categories/1589395980_ROYAL_CANIN_500X500.png"
        alt=""
      />
      </div>

      <div>
        <img
        src="https://s3.us-east-1.amazonaws.com/laikapp/images_categories/total_max_circulo2.png"
        alt=""
      />
      </div>
      
    </div>
  </section>
</template>

<script>
export default {
    name: "BrandsMobileFeatured"
}
</script>

<style scoped>
* {
  margin: 0px;
  padding: 0px;
}

section {
  margin-right: 15px;
}

section .container-featured-brands {
  justify-content: center;
  align-items: center;
}

h2 {
    text-align: center;
    margin-top: 20px;
    color: #603e85;
}

.container-featured-brands {
  display: grid;
  grid-template-columns: repeat(2, 100px);
  grid-gap: 40px;
  margin-top: 15px;
}

img {
    width: 110px;
    border-radius: 50%;
}
</style>
