<template>
  <section>
    <div class="item">
      <img
        src="https://laikapp.s3.amazonaws.com/dev_images_products/9833_124785_Furminator___Deslanador_Perro_Mediano_Pelo_Largo__1640098781_300x300.png"
        alt=""
      />
      <h3>titulo</h3>
      <span class="container-prices">
        <h3>estrellas</h3>
        <div class="container-prices-all">
          <div class="container-prices-all-price">
            <span>Price1</span>
            <span class="price-before">Antes</span>
          </div>
          <hr />
          <div class="container-price-laika">
            <span>Price 2</span>
            <div class="container-img-laika-members">
              <img src="https://laika.com.co/assets/laikamemeber.svg" alt="" />
              <button class="btn-laika">Adquierela ya</button>
            </div>
          </div>
        </div>
      </span>
      <button class="grams">170 Gramos</button>
      <button>Añadir a la cesta</button>
    </div>
  </section>
</template>
<script>
export default {
  name: "ProductsLaika",
};
</script>

<style scoped>

* {
  padding: 0px;
  margin: 0px;
}

.item {
    margin-top: 100px;
}

section .item {
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 300px;
  margin-left: 70px;
}

.item img,
h2 {
  width: 100%;
}

.item h3,
.container-prices {
  margin-left: 20px;
}

.container-prices-all-price {
  display: flex;
  justify-content: space-between;
}

.container-price-laika {
  display: flex;
  justify-content: space-between;
}

.container-img-laika-members {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 2px;
    margin-right: 70px;
}

.container-img-laika-members img {
    margin-bottom: 5px;
}

.container-price-laika img {
  width: 70px;
}

.btn-laika {
  background-color: #ffb100;
  color: #603e85;
  border-color: white;
  margin-left: 0px;
  margin-right: 15px;
  font-size: 12px;
  width: 100px;
  height: 20px;
  border-radius: 5px;
}

.container-price-laika .img-laika-members {
  margin-right: 90px;
}


.price-before {
    margin-right: 150px;
}

.container-prices-all {
  display: flex;
  flex-direction: column;
}

.item .grams {
  width: 60px;
  height: 50px;
  margin: 25px;
  border-radius: 3px;
}

button {
  width: 100%;
  height: 50px;
  background-color: #603e85;
  color: white;
  border: 0px;
  outline: none;
}
</style>