<template>
  <section class="container-categories">
    <div class="items">
      <img src="https://laika.com.co/assets/home/dog_mc.svg" alt="" />
      <span>Compra para perro</span>
      <img
        src="https://laika.com.co/assets/punto_de_flecha_a_la_derecha_1.svg"
        alt=""
      />
    </div>
    <div class="items">
      <img src="https://laika.com.co/assets/home/cat_mc_s.svg" alt="" />
      <span>Compra para gato</span>
      <img
        src="https://laika.com.co/assets/punto_de_flecha_a_la_derecha_1.svg"
        alt=""
      />
    </div>

    <!--<ul>
      <li class="img-c"><img src="https://laika.com.co/assets/home/dog_mc.svg" alt=""></li>
      <li>Compra para perro </li>
      <li><img class="img-arrow" src="https://laika.com.co/assets/punto_de_flecha_a_la_derecha_1.svg" alt=""></li>
      <li class="img-c"><img src="https://laika.com.co/assets/home/cat_mc_s.svg" alt=""></li>
      <li>Compra para gato</li>
      <li><img class="img-arrow" src="https://laika.com.co/assets/punto_de_flecha_a_la_derecha_1.svg" alt=""></li>
      <li>Ofertas</li>
      <li>Servicios</li>
      <li>Blog</li>
      <li>imagen</li>
    </ul>-->
    <div class="items">
      <span>Oferta</span>
      <img
        src="https://laika.com.co/assets/punto_de_flecha_a_la_derecha_1.svg"
        alt=""
      />
    </div>
    <div class="items">
      <span>Servicios</span>
      <img
        src="https://laika.com.co/assets/punto_de_flecha_a_la_derecha_1.svg"
        alt=""
      />
    </div>
    <div class="items">
      <span>Blog</span>
      <img
        src="https://laika.com.co/assets/punto_de_flecha_a_la_derecha_1.svg"
        alt=""
      />
    </div>
      <div class="brand-img">
        <img src="https://laika.com.co/assets/laikamemeber.svg" alt="" />
        <button>Adquierela ya</button>
      </div>
  </section>
</template>

<script>
export default {
  name: "NavCategories",
};
</script>

<style scoped>
* {
  padding: 0px;
  margin: 0px;
}
.container-categories {
  padding-left: 120px;
  padding-right: 120px;
}

.container-categories {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: white;
}

.items {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.items img {
  margin-left: 5px;
  margin-right: 5px;
  margin-top: 5px;
  margin-bottom: 5px;
}

.brand-img img {
  height: 12px;
}

button {
  border: 0;
  outline: none;
}

.brand-img button {
  background-color: #ffb100;
  border-color: white;
  margin-left: 5px;
  font-size: 12px;
  width: 120px;
  height: 30px;
  border-radius: 8px;
}

.container-categories {
  overflow: hidden;
}

</style>
