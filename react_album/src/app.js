import React, { useEffect, useState } from "react";

import { DndProvider } from "react-dnd"
import { HTML5Backend } from 'react-dnd-html5-backend'
import { api } from "./api";
import { FigAlbum, Outros } from "./components";

function App() {
    const [figurinhas, setFigurinhas] = useState([]);
    const [figAl, setFigAl] = useState([]);

    useEffect(() => {
        const load = async () => {
            const r = await api.get("/infoFigurinhas");
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
            <div className="div">
                {/* <div className="barra_progresso">
                    <ProgressIndicatorBasicExample />
                </div> */}
                <div>
                    <FigAlbum figAl={figAl} setFigAl={setFigAl} colaFigurinha={colaFigurinha} />
                </div>
                <div className="outros">
                    <Outros figurinhas={figurinhas} />
                </div>
            </div>
        </DndProvider>
    );
}

export default App;
