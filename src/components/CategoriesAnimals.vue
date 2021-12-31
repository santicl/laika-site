<template>
  <section class="section-categorys">
    <h2>Categoria</h2>
    <div class="section-categorys-items">
      <div class="section-categorys-item">
        <img
          src="https://laikapp.s3.amazonaws.com/dev_images_categories/1638497318C%C3%B3mo%20ayudar%20a%20nuestras%20mascotas%20a%20pasar%20las%20Fiestas%20Navide%C3%B1as%20sin%20sufrimiento%20-%20Jose%20Francisco%20Chipatecua%20Bonilla%20%281%29.jpeg"
          alt=""
        />
        <h3>Navidad</h3>
      </div>
      <div class="section-categorys-item">
        <img
          src="https://laikapp.s3.amazonaws.com/images_categories/categoria_alimento-min.png"
          alt=""
        />
        <h3>Alimento</h3>
      </div>
      <div class="section-categorys-item">
        <img
          src="https://laikapp.s3.amazonaws.com/images_categories/categoria_snacks-min.png"
          alt=""
        />
        <h3>Snacks</h3>
      </div>
      <div class="section-categorys-item">
        <img
          src="https://laikapp.s3.amazonaws.com/images_categories/categoria_farmacia.png"
          alt=""
        />
        <h3>Farmapet</h3>
      </div>
      <div class="section-categorys-item">
        <img
          src="https://laikapp.s3.amazonaws.com/images_categories/categoria_higiene.png"
          alt=""
        />
        <h3>Cuidado e Higuiene</h3>
      </div>
      <div class="section-categorys-item">
        <img
          src="https://laikapp.s3.amazonaws.com/images_categories/categoria_juguetes.png"
          alt=""
        />
        <h3>Juguetes</h3>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "CategoriesAnimals",
};
</script>
<style scoped>

* {
  padding: 0px;
  margin: 0px;
}

.section-categorys {
  margin-top: 15px;
}

.section-categorys h2 {
  margin-left: 70px;
  color: #603e85;
}

.section-categorys-items {
  display: flex;
  justify-content: space-between;
  text-align: center;
  align-items: center;
  margin-top: 80px;
  margin-left: 100px;
  margin-right: 100px;
}

.section-categorys-item {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.section-categorys-item img {
  width: 100px;
  height: auto;
  border-radius: 50%;
  margin-bottom: 5px;
  margin-left: 5px;
  margin-right: 5px;
}
</style>