import React, { useEffect, useState } from "react";
import { api } from "./api";
import { FigAlbum, Outros, ProgressIndicatorBasicExample } from "./components";

export const App = () => {
  const [logado, setLogado] = useState();

  useEffect(() => {
    
    // const load = async () => { 

    //   fetch('http://127.0.0.1:8000/logado')
    //   .then(response => response.json())
    //   .then(data => setlogado({ totalReactPackages: data.total }));

    //   console.log(logado);
    // };
    // load()
    
  }, []);


  if (logado === 0) {
    // window.location.replace('http://127.0.0.1:8000/login');
  } else {
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
  }
};
