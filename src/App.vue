<template>
  <LinkRel v-if="!mobileNav" />
  <div class="container-nav" v-if="mobileNav">
    <nav>
      <div class="container-icons-img">
        <div class="container-icon">
          <i class="fas fa-bars"></i>
          <div class="container-logo">
            <img
              class="brand"
              src="https://laika.com.co/assets/home/LaikaMascotas.svg"
            />
          </div>
          <div class="geografi">
            <div class="container-bandera">
              <img
                id="bandera"
                src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg"
                alt=""
              />
              <h3>Bog</h3>
            </div>
            <i class="fa fa-angle-down"></i>
          </div>
          <!--<div class="session">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <h3>Mi cuenta</h3>
          </div>-->
          <div class="card-buy">
            <img src="https://laika.com.co/assets/home/cart_mc.svg" alt="" />
          </div>
        </div>
        <!--<img
        class="brand"
        src="https://laika.com.co/assets/home/LaikaMascotas.svg"
      />-->
      </div>
    </nav>
    <div class="section-input">
      <input type="text" placeholder="¿Que necesita tu mascota?" />
      <i class="fas fa-search"></i>
    </div>
  </div>
  <Navigation v-if="!mobileNav" />
  <NavCategorieAnimals v-if="mobileNav" />
  <NavCategories v-if="!mobileNav" />
  <CarrouselMobile v-if="mobileNav" />
  <Carrousel v-if="!mobileNav" />
  <CategorieMobileAnimals v-if="mobileNav" />
  <CategoriesAnimals v-if="!mobileNav" />
  <BrandsMobileFeatured v-if="mobileNav" />
  <FeaturedBrands v-if="!mobileNav" />
  <ProductMobileLaika v-if="mobileNav" />
  <ProductsLaika v-if="!mobileNav" />
  <FooterMobile v-if="mobileNav" />
  <WapIcon />
  <FIcon v-if="mobileNav" />
  <Footer v-if="!mobileNav" />
</template>

<script>
import Navigation from "./components/Navigation.vue";
import LinkRel from "./components/LinkRel.vue";
import NavCategories from "./components/NavCategories.vue";
import Carrousel from "./components/Carrousel.vue";
import CategoriesAnimals from "./components/CategoriesAnimals.vue";
import ProductsLaika from "./components/ProductsLaika.vue";
import Footer from "./components/Footer.vue";
import FeaturedBrands from "./components/FeaturedBrands.vue";
import NavCategorieAnimals from "./components/NavCategorieAnimals.vue";
import CarrouselMobile from "./components/CarrouselMobile.vue";
import CategorieMobileAnimals from "./components/CategorieMobileAnimals.vue";
import BrandsMobileFeatured from "./components/BrandsMobileFeatured.vue";
import ProductMobileLaika from "./components/ProductMobileLaika.vue";
import FooterMobile from "./components/FooterMobile.vue";
import FIcon from "./components/FIcon.vue";
import WapIcon from "./components/WapIcon.vue";

export default {
  name: "App",
  data() {
    return {
      mobileNav: false,
      showNav: false,
    };
  },
  methods: {
    view() {
      this.mobileNav = window.innerWidth <= 990;
    },
  },
  components: {
    Navigation,
    LinkRel,
    NavCategories,
    NavCategorieAnimals,
    CarrouselMobile,
    Carrousel,
    CategorieMobileAnimals,
    CategoriesAnimals,
    ProductMobileLaika,
    ProductsLaika,
    BrandsMobileFeatured,
    FeaturedBrands,
    WapIcon,
    FIcon,
    FooterMobile,
    Footer,
  },
  created() {
    this.view();
    window.addEventListener("resize", this.view);
  },
};
</script>

<style scoped>
* {
  margin: 0px;
  padding: 0px;
}
.container-nav {
  background-color: #603e85;
  width: 100%;
  margin: auto;
  align-items: center;
}

.container-nav nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.container-icon {
  margin-left: 20px;
  width: 100%;
  margin-right: 5px;
}

.container-logo {
  margin-left: 12px;
}

.container-nav nav .container-icons-img,
.container-icons-img,
.container-icon,
.geografi,
.session,
.card-buy {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 2px;
  margin-bottom: 2px;
}

.fa-bars {
  color: white;
}

.geografi {
  margin-left: 50px;
  margin-right: 10px;
}

img {
  width: 30px;
}

.brand {
  margin-left: 83px;
}

.geografi #bandera {
  width: 20px;
}

.card-buy img {
  width: 20px;
  margin-left: 7px;
}

.container-icons-img {
  width: 100%;
}

.container-bandera h3 {
  font-size: 12px;
  color: white;
}

.container-icon .fa-angle-down {
  margin-left: 7px;
  color: white;
}

.section-input {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: 20px;
  margin-right: 20px;
}

input {
  width: 100%;
  height: 32px;
  border: 0;
  outline: none;
  border-radius: 7px;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-right: 0;
  padding-left: 15px;
}

.fa-search {
  position: absolute;
  margin-left: 280px;
  color: #603e85;
  
}
/*.container-icons-img {
  position: absolute;
top: 0px;
left: 0px;
}*/

#bandera {
  width: 50px;
}
</style>
