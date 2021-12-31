<template>
  <section class="container-all">
    <div class="container-categories-animals">
      <div class="container-dog">
        <h3>Perro</h3>
        <img src="https://laika.com.co/assets/home/dog_mc.svg" alt="" />
      </div>
      <div class="container-cat">
          <h3>Gato</h3>
          <img src="https://laika.com.co/assets/home/cat_mc_s.svg" alt="" />
      </div>
    </div>
    <div class="brand-img">
        <img src="https://laika.com.co/assets/laikamemeber.svg" alt="" />
        <button>Adquierela ya</button>
      </div>
  </section>
</template>

<script>
export default {
    name: "NavMobile"
}
</script>

<style scoped>

* {
  margin: 0px;
  padding: 0px;
  font-family: inherit;
}

.container-categories-animals {
    margin-left: 100px;
    margin-right: 100px;
    margin-top: 10px;
    margin-bottom: 10px;
}
.container-all .container-categories-animals, .container-dog, .container-cat{
    display: flex;
    justify-content: center;
    align-items: center;
}

.container-dog {
    height: 45px;
    border-radius: 5px;
    background-color: #603e85;
}

.container-cat {
    height: 45px;
    border-radius: 5px;
    margin-left: 10px;
}

.container-dog img, .container-cat img {
    margin-right: 10px;
    margin-left: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
}

.container-dog h3, .container-cat h3 {
    margin-left: 5px;
}

.brand-img {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 15px;
}


.brand-img img {
  height: 12px;
  margin-bottom: 5px;
}

.brand-img button {
  background-color: #ffb100;
  border-color: white;
  outline: none;
  font-size: 12px;
  width: 120px;
  height: 30px;
  border-radius: 8px;
}

</style>
