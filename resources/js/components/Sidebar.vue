<template>
  <div>
    <div
      class="sidebar absolute top-0 left-0 bg-blue-400 h-screen w-48 text-white drop-shadow-2xl"
    >
      <!-- Título do menu -->
      <div
        class="text-xl font-semibold text-center p-4"
        style="font-family: 'Dela Gothic One', cursive"
      >
        FINANCE
      </div>

      <!-- Linha divisória -->
      <hr class="border-t border-gray-600" />

      <!-- Itens do menu -->
      <ul>
        <li class="p-2 text-center">
          <router-link
            to="/"
            class="nav-link text-white"
            style="text-decoration: none; color: white"
            ><svg
              class="bi d-block mx-auto mb-1"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M4.5 21q-.625 0-1.063-.438T3 19.5v-1.9l4-3.55V21H4.5ZM8 21v-4h8v4H8Zm9 0v-8.2L12.725 9l3.025-2.675l4.75 4.225q.25.225.375.513t.125.612V19.5q0 .625-.438 1.063T19.5 21H17ZM3 16.25v-4.575q0-.325.125-.625t.375-.5L11 3.9q.2-.2.463-.287T12 3.525q.275 0 .537.088T13 3.9l2 1.775L3 16.25Z"
              /></svg
            >Dashboard</router-link
          >
        </li>
        <li class="p-2 text-center">
          <router-link
            to="/receita/create"
            class="nav-link text-white"
            style="text-decoration: none; color: white"
            ><svg
              class="bi d-block mx-auto mb-1"
              width="24"
              height="24"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M7 9h10V7H7v2Zm11 14q-2.075 0-3.538-1.463T13 18q0-2.075 1.463-3.538T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23Zm-.5-2h1v-2.5H21v-1h-2.5V15h-1v2.5H15v1h2.5V21ZM3 21V3h18v8.7q-.725-.35-1.463-.525T18 11q-.275 0-.513.013t-.487.062V11H7v2h6.1q-.425.425-.787.925T11.675 15H7v2h4.075q-.05.25-.063.488T11 18q0 .825.15 1.538T11.675 21H3Z"
              /></svg
            >Receitas</router-link
          >
        </li>
        <li class="p-2 text-center">
          <router-link
            to="/receita/create"
            class="nav-link text-white"
            style="text-decoration: none; color: white"
            ><svg
              class="bi d-block mx-auto mb-1"
              width="24"
              height="24"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M7 9h10V7H7v2Zm11 14q-2.075 0-3.538-1.463T13 18q0-2.075 1.463-3.538T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23Zm-.5-2h1v-2.5H21v-1h-2.5V15h-1v2.5H15v1h2.5V21ZM3 21V3h18v8.7q-.725-.35-1.463-.525T18 11q-.275 0-.513.013t-.487.062V11H7v2h6.1q-.425.425-.787.925T11.675 15H7v2h4.075q-.05.25-.063.488T11 18q0 .825.15 1.538T11.675 21H3Z"
              /></svg
            >Despesas</router-link
          >
        </li>
        <li class="p-2 text-center">
          <router-link
            to="/receita/create"
            class="nav-link text-white"
            style="text-decoration: none; color: white"
            ><svg
              class="bi d-block mx-auto mb-1"
              width="24px"
              height="24px"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6C13.6569 6 15 7.34315 15 9ZM12 20.5C13.784 20.5 15.4397 19.9504 16.8069 19.0112C17.4108 18.5964 17.6688 17.8062 17.3178 17.1632C16.59 15.8303 15.0902 15 11.9999 15C8.90969 15 7.40997 15.8302 6.68214 17.1632C6.33105 17.8062 6.5891 18.5963 7.19296 19.0111C8.56018 19.9503 10.2159 20.5 12 20.5Z"
                  fill="#ffffff"
                ></path>
              </g></svg
            >Usuários</router-link
          >
        </li>
        <li class="p-2 text-center">
          <router-link
            to="/receita/create"
            class="nav-link text-white"
            style="text-decoration: none; color: white"
            ><svg
              class="bi d-block mx-auto mb-1"
              width="24px"
              height="24px"
              viewBox="-2.5 0 20 20"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              fill="#ffffff"
              stroke="#ffffff"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <title>settings [#000000]</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g
                  id="Page-1"
                  stroke="none"
                  stroke-width="1"
                  fill="none"
                  fill-rule="evenodd"
                >
                  <g
                    id="Dribbble-Light-Preview"
                    transform="translate(-62.000000, -760.000000)"
                    fill="#ffffff"
                  >
                    <g id="icons" transform="translate(56.000000, 160.000000)">
                      <path
                        d="M17.7857143,610 C17.4075,610 16.7142857,609.928 16.7142857,609.816 L16.7142857,620 L18.8571429,620 L18.8571429,609.816 C18.8571429,609.928 18.1639286,610 17.7857143,610 M18.8571429,602.184 L18.8571429,600 L16.7142857,600 L16.7142857,602.184 C15.6428571,602.597 14.5714286,603.696 14.5714286,605 C14.5714286,606.657 16.0103571,608 17.7857143,608 C19.5610714,608 21,606.657 21,605 C21,603.696 19.9285714,602.597 18.8571429,602.184 M10.2857143,610.184 L10.2857143,600 L8.14285714,600 L8.14285714,610.184 C8.47928571,610.072 8.83607143,610 9.21428571,610 C9.5925,610 10.2857143,610.072 10.2857143,610.184 M12.4285714,615 C12.4285714,616.304 11.3571429,617.403 10.2857143,617.816 L10.2857143,620 L8.14285714,620 L8.14285714,617.816 C7.07142857,617.403 6,616.304 6,615 C6,613.343 7.43892857,612 9.21428571,612 C10.9896429,612 12.4285714,613.343 12.4285714,615"
                        id="settings-[#000000]"
                      ></path>
                    </g>
                  </g>
                </g>
              </g></svg
            >Configurações</router-link
          >
        </li>
      </ul>
    </div>
  </div>
</template>