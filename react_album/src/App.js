import React, { useEffect, useState } from "react";
import { api } from "./api";
import { FigAlbum, Outros, ProgressIndicatorBasicExample } from "./components";
import { DndProvider } from "react-dnd"
import { HTML5Backend } from 'react-dnd-html5-backend'
import { LinearProgress } from '@mui/material';

export const App = () => {
  const [figurinhas, setFigurinhas] = useState([]);
  const [figAl, setFigAl] = useState([]);
  const [pct, setPct] = useState(0);

  useEffect(() => {
      const load = async () => {
          const usuario = await api.get("/infoLogin");
          const r = await api.post("/infoFigurinhas", {id:1});
          let coladas = 0

          setFigAl(r.data[0]);
          setFigurinhas(r.data[1]);
          r.data[0].forEach(fig=>{
            if(fig?.colada === 1) {
                coladas += 1;
            }
          })
          setPct(Math.round(coladas/r.data[0].length *100))
      };

      load();
  }, []);

  const colaFigurinha = async (id) => {
      setFigurinhas((p) => p.filter((f) => f.id !== id));
      await api.post("/colaFigurinhas", { id: id });
  }

    return (
      <DndProvider backend={HTML5Backend}>
        <LinearProgress color="secondary"  variant="determinate" value={pct} />
        <div style={{display: "flex", flexDirection:"column", marginTop: '10px'}}>
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