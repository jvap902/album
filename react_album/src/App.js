import React, { useEffect, useState } from "react";
import { api } from "./api";
import { FigAlbum, Outros, ProgressIndicatorBasicExample } from "./components";

export const App = () => {
  
    return (
      <React.StrictMode>
        <div style={{display: "flex", flexDirection:"column"}}>
        <div >
          <div>
            <FigAlbum />
          </div>
          <div className="outros">
            <Outros />
          </div>
        </div>
        </div>
      </React.StrictMode>
    );
};
