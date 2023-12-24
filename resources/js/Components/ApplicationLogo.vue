<script setup>
import { defineProps, computed } from 'vue';

const props = defineProps({
    color: {
        type: String,
        default: 'black'
    },
    width: {
        type: Number,
        default: 100
    },
    height: {
        type: Number,
        default: 100
    }
})

const dynamicStylingBlock = computed(() => {
    return {
        width: `${props.width}px`,
        height: `${props.height}px`,
        color: props.color
    }
});

const svgContent = `
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
     x="0px" y="0px"
     viewBox="0 0 1080 1080" style="enable-background:new 0 0 1080 1080;" xml:space="preserve">
  <style type="text/css">
    .st0 {
      fill: none;
      stroke: #000000;
      stroke-width: 4.2739;
      stroke-miterlimit: 10;
    }

    .st1 {
      fill: none;
    }

    .st2 {
      font-family: 'EngraversGothicBT-Regular';
    }

    .st3 {
      font-size: 102.5734px;
    }

    .st4 {
      stroke: #000000;
      stroke-width: 3.2054;
      stroke-miterlimit: 10;
    }
  </style>

  <g>
    <g>
      <polyline class="st0" points="128.56,754.57 496.67,754.57 496.67,325.32 349.72,325.32"/>
      <polyline class="st0" points="56.69,670.85 56.69,754.57 107.42,754.57"/>
      <g>
        <path class="st1" d="M299.19,464.99c5.13-4.41,9.03-9.82,11.8-16.14H171.44v30.54h78.44
          C271.59,479.39,288.02,474.59,299.19,464.99z"/>
        <path class="st1" d="M299.19,380.32c-11.17-10.12-26.87-15.18-47.11-15.18H97.44v114.26h31.12V409.1h186.16
          C312.53,397.35,307.37,387.74,299.19,380.32z"/>
        <path class="st1" d="M355.96,453.75c-4.55,14.63-12.14,27.39-22.97,38.16c-18.68,18.58-43.57,27.86-74.66,27.86h-86.89v43.34
          h152.45c21.7,0,38.14-4.8,49.3-14.4c11.16-9.6,16.75-23.68,16.75-42.26c0-18.16-5.59-32.29-16.75-42.42
          C368.33,459.63,362.55,456.24,355.96,453.75z"/>
        <path d="M97.44,479.39V365.13h154.64c20.24,0,35.94,5.06,47.11,15.18c8.19,7.43,13.34,17.03,15.53,28.78h11.99
          c12.31,0,23.64,1.15,34.03,3.39c-1.37-25.91-10.86-46.64-28.68-62.06c-19.31-16.69-45.76-25.04-79.35-25.04H54.56v345.58h42.89
          V519.77h26.67l0.27-40.38H97.44z"/>
        <path d="M332.99,491.91c10.83-10.77,16.9-19.14,21.45-33.77c-8.53-3.22-15.5-4.5-27.1-5.31h-17.17
          c-2.77,6.31-5.85,7.75-10.99,12.17c-11.17,9.6-27.6,14.4-49.3,14.4h-78.44v40.38h86.89
          C289.43,519.77,314.32,510.49,332.99,491.91z"/>
        <path d="M406.06,434.14c-12.23-10.58-27.36-17.78-45.33-21.66c-10.39-2.24-21.72-3.39-34.03-3.39h-11.99H128.56v70.29v40.38
          v234.91h42.89V603.49h160.9c31.09,0,55.98-9.28,74.66-27.86c18.67-18.57,28.02-42.89,28.02-72.94
          C435.02,473.69,425.36,450.84,406.06,434.14z M373.19,548.71c-11.17,9.6-27.6,14.4-49.3,14.4H171.44v-43.34v-40.38v-30.54h139.55
          h15.09c11.42,0,21.35,1.67,29.88,4.9c6.59,2.49,12.36,5.88,17.23,10.29c11.16,10.13,16.75,24.26,16.75,42.42
          C389.94,525.03,384.35,539.11,373.19,548.71z"/>
      </g>
    </g>
    <rect x="530.12" y="486.3" class="st1" width="490.32" height="267.35"/>
    <text transform="matrix(1 0 0 1 530.1187 599.7375)"><tspan x="0" y="0" class="st2 st3">PREMIUM </tspan>
      <tspan x="0" y="76.93" class="st4 st2 st3">PRESENT</tspan>
      <tspan x="0" y="153.86" class="st2 st3">BALKAN</tspan></text>
  </g>
</svg>
`;

</script>

<template>
    <div class="logo" :style="dynamicStylingBlock" v-html="svgContent" />
</template>

<style scoped lang="css">
@media only screen and (max-width: 756px) {
    .logo {
        width: 100% !important;
        display: flex;
        justify-content: center;
    }
}
    .logo {
        //width: 100%;
    }
</style>

