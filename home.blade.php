<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- Favicon --}}
    <link rel="icon" href="{{ URL::asset('/img/favicon.svg') }}" type="image/x-icon"/>

    <!-- Tailwind CDN -->
    {{-- <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    /> --}}

    <!-- Fontawesome icons CDN -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <!-- Alpine.js CDN -->
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- Custom styles --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>Главная</title>
  </head>
  <body>
    <!-- Header start -->
    <header class="fixed top-center w-full text-center py-3 text-white font-semibold text-lg tracking-wide shadow-lg bg-gradient-to-r from-blue-900 to-blue-600 z-40">
        <div class="wrapper flex items-center justify-between">
          <nav class="flex justify-between items-center">
            <a href="#" class="logo inline-block w-12 h-12 relative bg-gradient-to-br from-blue-300 to-blue-500 p-5 rounded-full mr-2 hover:from-blue-600 hover:to-blue-600 transition-all duration-300">
              <img src="{{ URL::asset('/img/favicon.svg') }}" alt="logo" class="w-8 h-8 absolute inset-center">
            </a>

            <a href="#" class="link ml-3 inline-block px-2 py-0.5 rounded-lg hover:bg-white hover:text-blue-600 transition-all duration-300">Главная</a>
            <a href="#" class="link ml-3 inline-block px-2 py-0.5 rounded-lg hover:bg-white hover:text-blue-600 transition-all duration-300">О нас</a>
            <a href="#" class="link ml-3 inline-block px-2 py-0.5 rounded-lg hover:bg-white hover:text-blue-600 transition-all duration-300">Контакты</a>
          </nav>

          <div class="right flex items-center">
            <div class="profile flex items-center">
              <a href="#" class="inline-block px-2 py-0.5 rounded-lg hover:bg-white hover:text-blue-600 transition-all duration-300">Профиль</a>
              <a href="#" class="user_icon inline-block p-5 rounded-full ml-1 bg-gradient-to-br from-gray-100 to-blue-200 relative">
                <img src="{{ URL::asset('/img/courses_2.svg') }}" alt="profile_image" class="w-8 h-8 absolute inset-center">
              </a>
            </div>

            <div class="languages flex items-center ml-2">
              <a href="#" class="inline-block px-1 rounded-lg hover:bg-white hover:text-blue-600 transition-all duration-300 mr-1">Рус</a>
              |
              <a href="#" class="inline-block px-1 rounded-lg hover:bg-white hover:text-blue-600 transition-all duration-300 ml-1">Укр</a>
            </div>
          </div>
        </div>
    </header>
    <!-- Header end -->

    <!-- Content -->
    <main>

      <!-- Login/Registration form -->
      <section class="registration mt-40 mb-10">
        <div class="wrapper">
            <form class="shadow-md rounded px-8 py-10 mb-4 flex flex-col w-2/5 xl:w-3/5 md:w-4/5 sm:w-full mx-auto bg-gradient-to-br from-blue-50 to-gray-200">

                <div class="mb-4">
                  <label
                    class="block text-grey-darker text-sm font-bold mb-2"
                    for="username"
                  >
                    Логин
                  </label>
                  <input
                    class="shadow appearance-none border-2 border-transparent rounded w-full py-2 px-3 text-grey-darker outline-none focus:border-blue-200 bg-white"
                    id="username"
                    type="text"
                    placeholder="Логин"
                  />
                </div>

                <div class="mb-6">
                  <label
                    class="block text-grey-darker text-sm font-bold mb-2"
                    for="password"
                  >
                    Пароль
                  </label>
                  <input
                    class="shadow appearance-none border-2 border-transparent rounded w-full py-2 px-3 text-grey-darker outline-none focus:border-blue-200 bg-white"
                    id="password"
                    type="password"
                    placeholder="Пароль"
                  />
                </div>

                <div class="flex items-center justify-between mt-3">
                  <button
                    class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded transition-all duration-200"
                    type="button"
                  >
                    Войти
                  </button>
                  <button
                    class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded transition-all duration-200"
                    type="button"
                  >
                    Регистрация
                  </button>
                  <a
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800 hover:underline"
                    href="#"
                  >
                    Забыли пароль?
                  </a>
                </div>

            </form>
        </div>
      </section>

      <!-- Cards - Pros -->
      <section class="pros my-10">
        <div class="wrapper">
          <h2 class="text-center text-4xl font-bold">Почему мы</h2>
          <div class="p-8 flex flex-wrap items-center justify-center">
            <!-- Сard -->
            <div
              class="flex-shrink-0 m-6 relative overflow-hidden rounded-lg max-w-xs shadow-xl w-1/3 bg-gradient-to-br from-gray-50 to-gray-100 border border-cyan-900 border-opacity-5"
            >
              <div class="relative pt-10 px-10 flex items-center justify-center">
                <div
                  class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="
                    background: radial-gradient(black, transparent 60%);
                    transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1);
                    opacity: 0.2;
                  "
                ></div>
                <img
                  class="relative w-40"
                  src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                  alt=""
                />
              </div>
              <div class="relative px-6 pb-6 mt-6">
                <div class="flex justify-between">
                  <span class="block font-semibold text-xl text-gray-700"
                    >Peace Lily</span
                  >
                </div>
                <span class="block opacity-75 -mb-1 text-gray-700">Indoor</span>
              </div>
            </div>
            <!-- Сard -->
            <div
              class="flex-shrink-0 m-6 relative overflow-hidden rounded-lg max-w-xs shadow-lg w-1/3"
            >
              <div class="relative pt-10 px-10 flex items-center justify-center">
                <div
                  class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="
                    background: radial-gradient(black, transparent 60%);
                    transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1);
                    opacity: 0.2;
                  "
                ></div>
                <img
                  class="relative w-40"
                  src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                  alt=""
                />
              </div>
              <div class="relative px-6 pb-6 mt-6">
                <div class="flex justify-between">
                  <span class="block font-semibold text-xl text-gray-700"
                    >Peace Lily</span
                  >
                </div>
                <span class="block opacity-75 -mb-1 text-gray-700">Indoor</span>
              </div>
            </div>
            <!-- Сard -->
            <div
              class="flex-shrink-0 m-6 relative overflow-hidden rounded-lg max-w-xs shadow-lg w-1/3"
            >
              <div class="relative pt-10 px-10 flex items-center justify-center">
                <div
                  class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="
                    background: radial-gradient(black, transparent 60%);
                    transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1);
                    opacity: 0.2;
                  "
                ></div>
                <img
                  class="relative w-40"
                  src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                  alt=""
                />
              </div>
              <div class="relative px-6 pb-6 mt-6">
                <div class="flex justify-between">
                  <span class="block font-semibold text-xl text-gray-700"
                    >Peace Lily</span
                  >
                </div>
                <span class="block opacity-75 -mb-1 text-gray-700">Indoor</span>
              </div>
            </div>
            <!-- Сard -->
            <div
              class="flex-shrink-0 m-6 relative overflow-hidden rounded-lg max-w-xs shadow-lg w-1/3"
            >
              <div class="relative pt-10 px-10 flex items-center justify-center">
                <div
                  class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="
                    background: radial-gradient(black, transparent 60%);
                    transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1);
                    opacity: 0.2;
                  "
                ></div>
                <img
                  class="relative w-40"
                  src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                  alt=""
                />
              </div>
              <div class="relative px-6 pb-6 mt-6">
                <div class="flex justify-between">
                  <span class="block font-semibold text-xl text-gray-700"
                    >Peace Lily</span
                  >
                </div>
                <span class="block opacity-75 -mb-1 text-gray-700">Indoor</span>
              </div>
            </div>
            <!-- Сard -->
            <div
              class="flex-shrink-0 m-6 relative overflow-hidden rounded-lg max-w-xs shadow-lg w-1/3"
            >
              <div class="relative pt-10 px-10 flex items-center justify-center">
                <div
                  class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="
                    background: radial-gradient(black, transparent 60%);
                    transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1);
                    opacity: 0.2;
                  "
                ></div>
                <img
                  class="relative w-40"
                  src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                  alt=""
                />
              </div>
              <div class="relative px-6 pb-6 mt-6">
                <div class="flex justify-between">
                  <span class="block font-semibold text-xl text-gray-700"
                    >Peace Lily</span
                  >
                </div>
                <span class="block opacity-75 -mb-1 text-gray-700">Indoor</span>
              </div>
            </div>
            <!-- Сard -->
            <div
              class="flex-shrink-0 m-6 relative overflow-hidden rounded-lg max-w-xs shadow-lg w-1/3"
            >
              <div class="relative pt-10 px-10 flex items-center justify-center">
                <div
                  class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="
                    background: radial-gradient(black, transparent 60%);
                    transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1);
                    opacity: 0.2;
                  "
                ></div>
                <img
                  class="relative w-40"
                  src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                  alt=""
                />
              </div>
              <div class="relative px-6 pb-6 mt-6">
                <div class="flex justify-between">
                  <span class="block font-semibold text-xl text-gray-700"
                    >Peace Lily</span
                  >
                </div>
                <span class="block opacity-75 -mb-1 text-gray-700">Indoor</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Tabs -->
      <section class="my-10">
        <div class="wrapper">
            <h2 class="text-center text-4xl font-bold">Some tabs example</h2>
        <div class="flex items-center justify-center mx-auto">
          <div
            class="container mx-auto h-full flex flex-col justify-center items-stretch"
            x-data="{tab: 1}"
          >
            <div class="flex justify-start -space-x-px z-10">
              <a
                href="!#0"
                @click.prevent="tab = 1"
                :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 1, 'text-gray-600 bg-gray-200 hover:bg-blue-100 hover:text-white focus:outline-none focus:shadow-outline': tab !== 1}"
                class="block align-middle px-6 py-4 text-base font-semibold leading-none uppercase outline-none rounded-t-md"
                >Tab 1
              </a>
              <a
                href="!#0"
                @click.prevent="tab = 2"
                :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 2, 'text-gray-600 bg-gray-200 hover:bg-blue-100 hover:text-white focus:outline-none focus:shadow-outline': tab !== 2}"
                class="block align-middle px-6 py-4 text-base font-semibold leading-none uppercase outline-none rounded-t-md"
                >Tab 2
              </a>
              <a
                href="!#0"
                @click.prevent="tab = 3"
                :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 3, 'text-gray-600 bg-gray-200 hover:bg-blue-100 hover:text-white focus:outline-none focus:shadow-outline': tab !== 3}"
                class="block align-middle px-6 py-4 text-base font-semibold leading-none uppercase outline-none rounded-t-md"
                >Tab 3
              </a>
            </div>

            <div
              x-show="tab === 1"
              class="z-0 -mt-px px-6 py-8 border flex w2/3"
            >
              <div class="left w-1/2">
                <h1 class="text-gray-900 text-2xl font-bold leading-tighter">
                  Tailwind CSS and Alpine JS
                  <span class="text-gray-500 font-light leading-relaxed"
                    >&VerticalBar;</span
                  >
                  Tab 1
                </h1>
                <p class="mt-4 text-base leading-snug">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Possimus officia maiores ipsum illum enim repudiandae quaerat
                  tenetur sunt dolore, voluptatem blanditiis quo doloremque
                  commodi illo? Fugiat reiciendis aliquam omnis aperiam beatae?
                  Officia, quas consequuntur numquam laboriosam dolorem totam
                  est, vitae at nam iste autem inventore eveniet amet ex minima
                  in asperiores debitis repudiandae eligendi. Sint esse dolorem
                  est aperiam. Delectus!
                </p>
              </div>
              <div class="right relative w-1/2">
                <img
                  class="relative w-40 mx-auto"
                  src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                  alt=""
                />
              </div>
            </div>
            <div
              x-show="tab === 2"
              class="z-0 -mt-px px-6 py-8 border flex w2/3"
            >
              <div class="left w-1/2">
                <h1 class="text-gray-900 text-2xl font-bold leading-tighter">
                  Tailwind CSS and Alpine JS
                  <span class="text-gray-500 font-light leading-relaxed"
                    >&VerticalBar;</span
                  >
                  Tab 2
                </h1>
                <p class="mt-4 text-base leading-snug">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Possimus officia maiores ipsum illum enim repudiandae quaerat
                  tenetur sunt dolore, voluptatem blanditiis quo doloremque
                  commodi illo? Fugiat reiciendis aliquam omnis aperiam beatae?
                  Officia, quas consequuntur numquam laboriosam dolorem totam
                  est, vitae at nam iste autem inventore eveniet amet ex minima
                  in asperiores debitis repudiandae eligendi. Sint esse dolorem
                  est aperiam. Delectus!
                </p>
              </div>
              <div class="right relative w-1/2">
                <img
                  class="relative w-40 mx-auto"
                  src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                  alt=""
                />
              </div>
            </div>
            <div
              x-show="tab === 3"
              class="z-0 -mt-px px-6 py-8 border flex w2/3"
            >
              <div class="left w-1/2">
                <h1 class="text-gray-900 text-2xl font-bold leading-tighter">
                  Tailwind CSS and Alpine JS
                  <span class="text-gray-500 font-light leading-relaxed"
                    >&VerticalBar;</span
                  >
                  Tab 3
                </h1>
                <p class="mt-4 text-base leading-snug">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Possimus officia maiores ipsum illum enim repudiandae quaerat
                  tenetur sunt dolore, voluptatem blanditiis quo doloremque
                  commodi illo? Fugiat reiciendis aliquam omnis aperiam beatae?
                  Officia, quas consequuntur numquam laboriosam dolorem totam
                  est, vitae at nam iste autem inventore eveniet amet ex minima
                  in asperiores debitis repudiandae eligendi. Sint esse dolorem
                  est aperiam. Delectus!
                </p>
              </div>
              <div class="right relative w-1/2">
                <img
                  class="relative w-40 mx-auto"
                  src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>

      <!-- Cards - Some courses/prices -->
      <section class="prices w-full my-10">
        <div class="wrapper">
            <h2 class="text-center text-4xl font-bold">Цены</h2>
        <div class="flex items-center justify-center w-full -mx-4">
          <!-- Сard -->
          <div class="mx-4 relative overflow-hidden rounded-lg shadow-lg w-1/4">
            <div class="relative pt-10 px-10 flex items-center justify-center">
              <div
                class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="
                  background: radial-gradient(black, transparent 60%);
                  transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1);
                  opacity: 0.2;
                "
              ></div>
              <img
                class="relative w-40"
                src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                alt=""
              />
            </div>
            <div class="relative px-6 pb-6 mt-6">
              <div class="flex justify-between">
                <span class="block font-semibold text-xl text-gray-700"
                  >Peace Lily</span
                >
              </div>
              <span class="block opacity-75 -mb-1 text-gray-700">Indoor</span>
            </div>
          </div>
          <!-- Сard -->
          <div class="mx-4 relative overflow-hidden rounded-lg shadow-lg w-1/4">
            <div class="relative pt-10 px-10 flex items-center justify-center">
              <div
                class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="
                  background: radial-gradient(black, transparent 60%);
                  transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1);
                  opacity: 0.2;
                "
              ></div>
              <img
                class="relative w-40"
                src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                alt=""
              />
            </div>
            <div class="relative px-6 pb-6 mt-6">
              <div class="flex justify-between">
                <span class="block font-semibold text-xl text-gray-700"
                  >Peace Lily</span
                >
              </div>
              <span class="block opacity-75 -mb-1 text-gray-700">Indoor</span>
            </div>
          </div>
          <!-- Сard -->
          <div class="mx-4 relative overflow-hidden rounded-lg shadow-lg w-1/4">
            <div class="relative pt-10 px-10 flex items-center justify-center">
              <div
                class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="
                  background: radial-gradient(black, transparent 60%);
                  transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1);
                  opacity: 0.2;
                "
              ></div>
              <img
                class="relative w-40"
                src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                alt=""
              />
            </div>
            <div class="relative px-6 pb-6 mt-6">
              <div class="flex justify-between">
                <span class="block font-semibold text-xl text-gray-700"
                  >Peace Lily</span
                >
              </div>
              <span class="block opacity-75 -mb-1 text-gray-700">Indoor</span>
            </div>
          </div>
          <!-- Сard -->
          <div class="mx-4 relative overflow-hidden rounded-lg shadow-lg w-1/4">
            <div class="relative pt-10 px-10 flex items-center justify-center">
              <div
                class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="
                  background: radial-gradient(black, transparent 60%);
                  transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1);
                  opacity: 0.2;
                "
              ></div>
              <img
                class="relative w-40"
                src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                alt=""
              />
            </div>
            <div class="relative px-6 pb-6 mt-6">
              <div class="flex justify-between">
                <span class="block font-semibold text-xl text-gray-700"
                  >Peace Lily</span
                >
              </div>
              <span class="block opacity-75 -mb-1 text-gray-700">Indoor</span>
            </div>
          </div>
        </div>
        </div>
      </section>

      <!-- Tabs -->
      <section class="videos my-10 w-full">
        <div class="wrapper">
            <h2 class="text-center text-4xl font-bold mb-10">
                Видеоуроки в студийном качестве
              </h2>
              <div class="flex items-center justify-center mx-auto w-full">
                <div
                  class="container mx-auto h-full flex flex-row justify-center items-stretch"
                  x-data="{tab: 1}"
                >
                  <div
                    x-show="tab === 1"
                    class="z-0 -mt-px px-6 py-8 border flex w-2/3"
                  >
                    <div class="left w-1/2">
                      <div class="right relative w-1/2">
                        1
                        <img
                          class="relative w-40 mx-auto"
                          src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div
                    x-show="tab === 2"
                    class="z-0 -mt-px px-6 py-8 border flex w-2/3"
                  >
                    <div class="left w-1/2">
                      <div class="right relative w-1/2">
                        2
                        <img
                          class="relative w-40 mx-auto"
                          src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div
                    x-show="tab === 3"
                    class="z-0 -mt-px px-6 py-8 border flex w-2/3"
                  >
                    <div class="left w-1/2">
                      <div class="right relative w-1/2">
                        3
                        <img
                          class="relative w-40 mx-auto"
                          src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div
                    x-show="tab === 4"
                    class="z-0 -mt-px px-6 py-8 border flex w-2/3"
                  >
                    <div class="left w-1/2">
                      <div class="right relative w-1/2">
                        4
                        <img
                          class="relative w-40 mx-auto"
                          src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div
                    x-show="tab === 5"
                    class="z-0 -mt-px px-6 py-8 border flex w-2/3"
                  >
                    <div class="left w-1/2">
                      <div class="right relative w-1/2">
                        5
                        <img
                          class="relative w-40 mx-auto"
                          src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>

                  <div class="flex flex-col justify-start -space-x-px z-10 w-1/3">
                    <a
                      href="!#0"
                      @click.prevent="tab = 1"
                      :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 1, 'text-gray-600 bg-gray-200 hover:bg-blue-100 hover:text-white focus:outline-none focus:shadow-outline': tab !== 1}"
                      class="block align-middle px-6 py-4 text-base font-semibold leading-none uppercase outline-none rounded-t-md"
                      >Tab 1
                    </a>
                    <a
                      href="!#0"
                      @click.prevent="tab = 2"
                      :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 2, 'text-gray-600 bg-gray-200 hover:bg-blue-100 hover:text-white focus:outline-none focus:shadow-outline': tab !== 2}"
                      class="block align-middle px-6 py-4 text-base font-semibold leading-none uppercase outline-none rounded-t-md"
                      >Tab 2
                    </a>
                    <a
                      href="!#0"
                      @click.prevent="tab = 3"
                      :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 3, 'text-gray-600 bg-gray-200 hover:bg-blue-100 hover:text-white focus:outline-none focus:shadow-outline': tab !== 3}"
                      class="block align-middle px-6 py-4 text-base font-semibold leading-none uppercase outline-none rounded-t-md"
                      >Tab 3
                    </a>
                    <a
                      href="!#0"
                      @click.prevent="tab = 4"
                      :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 4, 'text-gray-600 bg-gray-200 hover:bg-blue-100 hover:text-white focus:outline-none focus:shadow-outline': tab !== 4}"
                      class="block align-middle px-6 py-4 text-base font-semibold leading-none uppercase outline-none rounded-t-md"
                      >Tab 4
                    </a>
                    <a
                      href="!#0"
                      @click.prevent="tab = 5"
                      :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 5, 'text-gray-600 bg-gray-200 hover:bg-blue-100 hover:text-white focus:outline-none focus:shadow-outline': tab !== 5}"
                      class="block align-middle px-6 py-4 text-base font-semibold leading-none uppercase outline-none rounded-t-md"
                      >Tab 5
                    </a>
                  </div>
                </div>
              </div>
        </div>
      </section>

      <!-- Screenshots about -->
      <section class="how_we_teach my-10 w-full">
        <div class="wrapper">
            <h2 class="text-center text-4xl font-bold mb-10">Как мы учим</h2>
        <div class="slides flex flex-col">
          <img src="{{ asset('img/how_we_teach_1.png') }}" class="inline-block" />
          <img src="{{ asset('img/how_we_teach_2.jpg') }}" class="inline-block" />
          <img src="{{ asset('img/how_we_teach_3.jpg') }}" class="inline-block" />
        </div>
        </div>
      </section>

      <!-- Slider with other courses -->
      <section class="courses my-10 w-full">
        <div class="wrapper">
            <h2 class="text-center text-4xl font-bold">Наши курсы</h2>
        <div class="slides flex flex-col relative py-5">
          <div
            class="card mx-5 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white"
          >
            <img src="{{ asset('img/courses_1.svg') }}" class="w-20 h-20 mx-auto" />
            <h5 class="block mt-5 font-bold">
              Подготовка к ЗНО по украинскому языку и литературе
            </h5>
            <span class="block mt-5">
              Количество уроков:
              <strong>8</strong>
            </span>
            <span class="block mt-5">
              Цена за курс:
              <strong>3750 грн</strong>
            </span>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
            >
              Записаться
            </a>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
            >
              Подробнее
            </a>
          </div>

          <div
            class="card mx-5 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white"
          >
            <img src="{{ asset('img/courses_2.svg') }}" class="w-20 h-20 mx-auto" />
            <h5 class="block mt-5 font-bold">
              Подготовка к ЗНО по украинскому языку и литературе
            </h5>
            <span class="block mt-5">
              Количество уроков:
              <strong>8</strong>
            </span>
            <span class="block mt-5">
              Цена за курс:
              <strong>3750 грн</strong>
            </span>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
            >
              Записаться
            </a>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
            >
              Подробнее
            </a>
          </div>

          <div
            class="card mx-5 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white"
          >
            <img src="{{ asset('img/courses_3.svg') }}" class="w-20 h-20 mx-auto" />
            <h5 class="block mt-5 font-bold">
              Подготовка к ЗНО по украинскому языку и литературе
            </h5>
            <span class="block mt-5">
              Количество уроков:
              <strong>8</strong>
            </span>
            <span class="block mt-5">
              Цена за курс:
              <strong>3750 грн</strong>
            </span>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
            >
              Записаться
            </a>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
            >
              Подробнее
            </a>
          </div>

          <div
            class="card mx-5 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white"
          >
            <img src="{{ asset('img/courses_1.svg') }}" class="w-20 h-20 mx-auto" />
            <h5 class="block mt-5 font-bold">
              Подготовка к ЗНО по украинскому языку и литературе
            </h5>
            <span class="block mt-5">
              Количество уроков:
              <strong>8</strong>
            </span>
            <span class="block mt-5">
              Цена за курс:
              <strong>3750 грн</strong>
            </span>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
            >
              Записаться
            </a>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
            >
              Подробнее
            </a>
          </div>

          <div
            class="card mx-5 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white"
          >
            <img src="{{ asset('img/courses_2.svg') }}" class="w-20 h-20 mx-auto" />
            <h5 class="block mt-5 font-bold">
              Подготовка к ЗНО по украинскому языку и литературе
            </h5>
            <span class="block mt-5">
              Количество уроков:
              <strong>8</strong>
            </span>
            <span class="block mt-5">
              Цена за курс:
              <strong>3750 грн</strong>
            </span>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
            >
              Записаться
            </a>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
            >
              Подробнее
            </a>
          </div>

          <div
            class="card mx-5 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white"
          >
            <img src="{{ asset('img/courses_3.svg') }}" class="w-20 h-20 mx-auto" />
            <h5 class="block mt-5 font-bold">
              Подготовка к ЗНО по украинскому языку и литературе
            </h5>
            <span class="block mt-5">
              Количество уроков:
              <strong>8</strong>
            </span>
            <span class="block mt-5">
              Цена за курс:
              <strong>3750 грн</strong>
            </span>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
            >
              Записаться
            </a>
            <a
              href="#"
              class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
            >
              Подробнее
            </a>
          </div>
        </div>
        </div>
      </section>
    </main>

    <!-- Footer start -->
    <footer class="bg-gray-800 pt-10 sm:mt-10 pt-10">
      <div class="wrapper">
        <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-left">
            <!-- Col-1 -->
            <div class="p-5 w-1/3 sm:w-4/12 md:w-3/12">
              <!-- Col Title -->
              <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                Getting Started
              </div>

              <!-- Links -->
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Installation
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Release Notes
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Upgrade Guide
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Using with Preprocessors
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Optimizing for Production
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Browser Support
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                IntelliSense
              </a>
            </div>

            <!-- Col-2 -->
            <div class="p-5 w-1/3 sm:w-4/12 md:w-3/12">
              <!-- Col Title -->
              <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                Core Concepts
              </div>

              <!-- Links -->
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Utility-First
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Responsive Design
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Hover, Focus, & Other States
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Dark Mode
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Adding Base Styles
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Extracting Components
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Adding New Utilities
              </a>
            </div>

            <!-- Col-3 -->
            <div class="p-5 w-1/3 sm:w-4/12 md:w-3/12">
              <!-- Col Title -->
              <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                Customization
              </div>

              <!-- Links -->
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Configuration
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Theme Configuration
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Breakpoints
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Customizing Colors
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Customizing Spacing
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Configuring Variants
              </a>
              <a
                href="#"
                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700"
              >
                Plugins
              </a>
            </div>
          </div>

          <!-- Copyright Bar -->
          <div class="pt-2">
            <div
              class="flex pb-5 px-3 m-auto pt-5 border-t border-gray-500 text-gray-400 text-sm flex-col md:flex-row max-w-6xl"
            >
              <div class="mt-2">© Copyright 2021. All Rights Reserved.</div>

              <!-- Required Unicons (if you want) -->
              <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                <a href="#" class="w-6 mx-1">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="w-6 mx-1">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="w-6 mx-1">
                  <i class="fab fa-youtube"></i>
                </a>
                <a href="#" class="w-6 mx-1">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- Link slick -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        $("section.how_we_teach .slides")
          .not(".slick-initialized")
          .slick({
            arrows: false,
            draggable: true,
            focusOnSelect: false,
            infinite: false,
            autoplay: false,
            dots: true,
            variableWidth: true,
            vertical: false,
            verticalSwiping: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                  draggable: true,
                  touchThreshold: 300,
                },
              },
            ],
          });
        $("section.courses .slides")
          .not(".slick-initialized")
          .slick({
            arrows: true,
            prevArrow: `
              <button type="button">
                <i class="fas fa-chevron-left"></i>
              </button>
            `,
            nextArrow: `
              <button type="button">
                <i class="fas fa-chevron-right"></i>
              </button>
            `,
            draggable: true,
            focusOnSelect: false,
            infinite: false,
            autoplay: false,
            dots: false,
            variableWidth: true,
            vertical: false,
            verticalSwiping: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            centerMode: false,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                  draggable: true,
                  touchThreshold: 300,
                },
              },
            ],
          });
      });
    </script>
  </body>
</html>

