<template>
  <section class="section-categorys">
    <h2>Categoria</h2>
    <div class="section-categorys-items">
      <div class="section-categorys-item">
        <button><i class="fa fa-forumbee" aria-hidden="true"></i>Navidad</button>
      </div>
      <div class="section-categorys-item">
        <button><i class="fa fa-sun-o" aria-hidden="true"></i>Alimento</button>
      </div>
      <div class="section-categorys-item">
        <button><i class="fa fa-forumbee" aria-hidden="true"></i>Snacks</button>
      </div>
      <div class="section-categorys-item">
        <button><i class="fa fa-medkit" aria-hidden="true"></i>Farmapet</button>
      </div>
      <div class="section-categorys-item">
        <button><i class="fa fa-heartbeat" aria-hidden="true"></i>Cuidado e Higuiene</button>
      </div>
      <div class="section-categorys-item">
        <button><i class="fa fa-gamepad" aria-hidden="true"></i>Juguetes</button>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "CategorieMobileAnimals",
};
</script>

<style scoped>
* {
  margin: 0px;
  padding: 0px;
}
.section-categorys{
    width: 100%;
    margin-top: 40px;
}

img {
    width: 30px;
    border-radius: 50%;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

h3 {
    font-size: 12px;
}

.section-categorys-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left: 35px;
    margin-right: 35px;
}

button {
    height: 40px;
    width: 900px;
    margin-bottom: 5px;
    border-radius: 5px;
    border: none;
    outline: none;
}
i {
    margin-right: 12px;
}

</style>
