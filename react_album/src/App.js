import React from "react";
import { FigAlbum, Outros, ProgressIndicatorBasicExample } from "./components";
import { Login } from "./components/login";

export const App = () => {
  if ( 1 === 3/* ALYSSA VAI COLOCAR CONDIÇÃO PRA VER SE NÃO TA LOGADO */) {
    console.log("ienoreioregibroeorgbie");
    return (
        <React.StrictMode>
        <Login />
      </React.StrictMode>
    )
  } else {
    return (
      <React.StrictMode>
        <div className="div">
          {/* <div className="barra_progresso">
        <ProgressIndicatorBasicExample />
      </div> */}
          <div>
            <FigAlbum />
          </div>
          <div className="outros">
            <Outros />
          </div>
        </div>
      </React.StrictMode>
    );
  }
};
