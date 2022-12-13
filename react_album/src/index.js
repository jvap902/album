import React from "react";
import ReactDOM from "react-dom/client";
import { FigAlbum, Outros, ProgressIndicatorBasicExample, CreateFig } from "./components";

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
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
      <div>
      <CreateFig/>
      </div>
    </div>
  </React.StrictMode>
);
