<template>
  <footer>
    <div class="container-footer">
      <div class="section-categorys-items">
        <div class="section-categorys-item">
          <button>
            Acerca de Laika<i class="fa fa-arrow-right" aria-hidden="true"></i>
          </button>
        </div>
        <div class="section-categorys-item">
          <button>
            Links de interes<i class="fa fa-arrow-right" aria-hidden="true"></i>
          </button>
        </div>
        <div class="section-categorys-item">
          <button>
            Informacion<i class="fa fa-arrow-right" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>


export default {
    name: "FooterMobile",
}
</script>


<style scoped>
* {
  margin: 0px;
  padding: 0px;
}
.container-footer{
    width: 100%;
    margin-top: 40px;
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
    color: #603e85;
}
i {
    margin-left: 12px;
    color: #603e85;
}

</style>