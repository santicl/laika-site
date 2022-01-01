<template>
  <LinkRel v-if="!mobileNav" />
  <NavigationMobile v-if="mobileNav" />
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
import NavigationMobile from "./components/NavigationMobile.vue";

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
    NavigationMobile,
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

