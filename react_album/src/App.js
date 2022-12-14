import React, { useEffect, useState } from "react";
import { api } from "./api";
import { FigAlbum, Outros, ProgressIndicatorBasicExample } from "./components";
import { DndProvider } from "react-dnd"
import { HTML5Backend } from 'react-dnd-html5-backend'

export const App = () => {
  const [figurinhas, setFigurinhas] = useState([]);
  const [figAl, setFigAl] = useState([]);

  useEffect(() => {
      const load = async () => {
          const usuario = await api.get("/infoLogin");
          const r = await api.post("/infoFigurinhas", {id:1});
          setFigAl(r.data[0]);
          setFigurinhas(r.data[1]);
      };

      load();
  }, []);

  const colaFigurinha = async (id) => {
      setFigurinhas((p) => p.filter((f) => f.id !== id));
      await api.post("/colaFigurinhas", { id: id });
  }

    return (
      <DndProvider backend={HTML5Backend}>
        <div style={{display: "flex", flexDirection:"column"}}>
        <div >
          <div>
            <FigAlbum figAl={figAl} setFigAl={setFigAl} colaFigurinha={colaFigurinha}/>
          </div>
          <div className="outros">
            <Outros figurinhas={figurinhas}/>
          </div>
        </div>
        </div>
      </DndProvider>
    );
};
