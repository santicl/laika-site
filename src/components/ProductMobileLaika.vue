<template>
  <section>
    <div class="item">
      <img
        src="https://laikapp.s3.amazonaws.com/dev_images_products/9833_124785_Furminator___Deslanador_Perro_Mediano_Pelo_Largo__1640098781_300x300.png"
        alt=""
      />
      <h3>titulo</h3>
      <span class="container-prices">
        <div class="starts">
          <i class="fa-xs fa fa-star card_star"></i>
          <i class="fa-xs fa fa-star card_star"></i>
          <i class="fa-xs fa fa-star card_star"></i>
          <i class="fa-xs fa fa-star card_star"></i>
        </div>
        <div class="container-prices-all">
          <div class="container-prices-all-price">
            <span>Price1</span>
            <span class="price-before">Antes</span>
          </div>
          <hr />
          <div class="container-price-laika">
            <span>Price 2</span>
            <div class="container-img-laika-members">
              <img
                class="img"
                src="https://laika.com.co/assets/laikamemeber.svg"
                alt=""
              />
              <button class="btn-laika">Adquierela ya</button>
            </div>
          </div>
        </div>
      </span>
      <button class="grams">170 Gramos</button>
      <button class="cesta">Añadir a la cesta</button>
    </div>
  </section>
</template>

<script>
export default {
  name: "ProductMobileLaika",
};
</script>
<style scoped>
* {
  margin: 0px;
  padding: 0px;
}
section {
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    margin-left: 20px;
}

section .item {
  width: 250px;
}

section .item img {
  width: 250px;
}

h3,
.starts {
  margin-left: 20px;
}

.starts i {
    color: yellow;
}

.container-prices-all-price {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.container-price-laika {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.container-img-laika-members {
  display: flex;
  flex-direction: column;
  margin-top: 5px;
}

.container-img-laika-members .img {
  width: 120px;
}

span {
    margin-left: 20px;
}

.container-img-laika-members button {
  background-color: #ffb100;
  color: #603e85;
  border-color: white;
  margin-left: 0px;
  margin-right: 15px;
  font-size: 12px;
  width: 100px;
  height: 20px;
  border-radius: 5px;
  margin-top: 5px;
}

.container-prices-all {
    margin-top: 10px;
}

.grams {
    width: 60px;
    height: 40px;
    margin: 12px;
    background-color: #603e85;
    color: white;
    border: none;
    outline: none;
}

.cesta {
    width: 100%;
    margin-top: 10px;
    height: 50px;
    background-color: #603e85;
    color: white;
    border: none;
    outline: none;
}

.item {
  overflow: hidden;
}
</style>