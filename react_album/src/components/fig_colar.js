import React, { useEffect, useState } from "react";
import { api } from "../api";
import { Figurinha } from "./figurinha";

export const FigColar = () => {
    const figurinhas = [
        { id:1, num: 1, nome: "AAAAA", naturalidade: "Bento Gonçalves", dtnasc: "11/11/2011", img: "a", colada: 1 },
        { id:2, num: 2, nome: "BBBBB", naturalidade: "Bento Gonçalves", dtnasc: "12/12/2012", img: "15-4020", colada: 0 },
      ];
    
      const [fig, setFig] = useState([]);
    
      useEffect(() => {
        const load = async () => {
          const r = await api.get("/infoFigurinhas"); //mudar para pegar as figurinhas que o usuário tem
    
          console.log(r.data)
          setFig(r.data);
        };
    
        load();
      }, []);
    
      return (
        <div className="figurinhas_sweep">
          <div className="row">
            {figurinhas.map((figurinha) => (
              <Figurinha key={figurinha.num} data={figurinha} />
            ))}
          </div>
        </div>
      );
};
