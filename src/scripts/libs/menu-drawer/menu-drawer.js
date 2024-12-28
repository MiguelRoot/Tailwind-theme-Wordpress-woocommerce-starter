import "./menu-drawer.scss";

export function createOverlay() {
  const buttonMenu = document.getElementById("menu-btn");

  if (!buttonMenu) {
    console.warn("No se encontró el elemento con el id: menu-btn");
    return;
  }

  const svgMarkup = `
    <svg class="hb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" stroke="currentColor" stroke-width=".8" fill="rgba(0,0,0,0)" stroke-linecap="round" style="cursor: pointer">
      <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
        <animate id="anim-start" dur="0.2s" attributeName="d" values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7" fill="freeze" />
        <animate id="anim-reverse" dur="0.2s" attributeName="d" values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7" fill="freeze" />
      </path>
    </svg>
  `;

  // Insertar el SVG dentro del botón
  buttonMenu.innerHTML = svgMarkup;

  const animStart = buttonMenu.querySelector("#anim-start");
  const animReverse = buttonMenu.querySelector("#anim-reverse");

  // overlay
  const model = {
    isMenuOpen: false,
    change: [],

    present(proposal) {
      if (this.isMenuOpen === proposal || proposal == null) return;
      this.isMenuOpen = proposal;
      this.notifyChange();
    },

    notifyChange() {
      this.change.forEach((callback) => callback(this.isMenuOpen));
    },
  };

  const actions = {
    toggleMenu() {
      model.present(!model.isMenuOpen);
      state.render();
    },
    closeMenu() {
      model.present(false);
      state.render();
    },
  };

  const state = {
    render() {
      const menudrawer = document.getElementById("menu-drawer");
      if (!menudrawer) {
        console.warn("No se encontró el elemento con el id: menu-drawer");
        return;
      }

      if (model.isMenuOpen) {
        menudrawer.classList.add("active");
      } else {
        menudrawer.classList.remove("active");
      }

      if (!model.isMenuOpen) {
        animReverse.beginElement(); // Inicia la animación "reverse"
      } else {
        animStart.beginElement(); // Inicia la animación "start"
      }

      //
      // Selecciona todos los elementos con el atributo data-menu-active
      const elements = document.querySelectorAll("[data-menu-active]");

      if (elements.length === 0) {
        console.log(
          "No se encontraron elementos con el atributo data-menu-active"
        );
        return;
      }

      // Itera sobre cada elemento
      elements.forEach((element) => {
        // Obtiene el valor del atributo data-menu-active
        const menuActiveValue = element.getAttribute("data-menu-active");

        if (model.isMenuOpen) {
          // Agrega el valor como una clase al elemento si el menú está abierto
          element.classList.add(menuActiveValue);
        } else {
          // Quita el valor como una clase al elemento si el menú está cerrado
          element.classList.remove(menuActiveValue);
        }
      });
    },
  };

  // Evento para abrir o cerrar el menú al hacer clic en el botón
  buttonMenu.addEventListener("click", () => {
    actions.toggleMenu();
  });

  function change(callback) {
    model.change.push(callback);
  }

  function setState(newState) {
    model.present(newState);
    state.render();
  }

  return {
    change,
    setState,
    getState: model.isMenuOpen,
  };
}

createOverlay();
