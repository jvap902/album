import React, { useEffect, useState } from "react";
import { api } from "../api";
import { Figurinha } from "./figurinha";

export const FigColar = () => {
  const figurinhas = [
    { id: 1, numero: 1, nome: "AAAAA", naturalidade: "Bento Gonçalves", dtnasc: "11/11/2011", img: "a", colada: 1 },
    { id: 2, numero: 2, nome: "BBBBB", naturalidade: "Bento Gonçalves", dtnasc: "12/12/2012", img: "15-4020", colada: 0 },
    { id: 3, numero: 2, nome: "BBBBB", naturalidade: "Bento Gonçalves", dtnasc: "12/12/2012", img: "15-4020", colada: 0 },
    { id: 4, numero: 2, nome: "BBBBB", naturalidade: "Bento Gonçalves", dtnasc: "12/12/2012", img: "15-4020", colada: 0 },
    { id: 5, numero: 2, nome: "BBBBB", naturalidade: "Bento Gonçalves", dtnasc: "12/12/2012", img: "15-4020", colada: 0 },
    { id: 6, numero: 2, nome: "BBBBB", naturalidade: "Bento Gonçalves", dtnasc: "12/12/2012", img: "15-4020", colada: 0 },

  ];

  const [fig, setFig] = useState([]);

  useEffect(() => {
    const load = async () => {
      const r = await api.get("/infoFigurinhas");

      setFig(r.data[2]);
    };

    load();
  }, []);

  return (
    <div className="figurinhas_sweep">
      <div className="row">
        {fig.map((figurinha) => {
          if (figurinha.colada == 0) return <Figurinha key={figurinha.numero} data={figurinha} />;
        })}
      </div>
    </div>
  );
};
