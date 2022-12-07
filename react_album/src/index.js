import React from "react";
import ReactDOM from "react-dom/client";
import { FigAlbum } from "./components";

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <div className="div">
      <div className="barra_progresso">

      </div>
      <div>
        <FigAlbum />
      </div>
      
    </div>
  </React.StrictMode>
);
