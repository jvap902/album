import React from "react";
import { useDrop } from "react-dnd";
import { TYPES } from "./types";


//local pra colocar a figurinha
export const Figurinha = ({ data, colaFigurinha, setFigAl }) => {
  console.log(data)
  const [{ backgroundColor }, dropRef] = useDrop(() => ({
      accept: TYPES.FIGURINHA,
      drop: (item) => {
          colaFigurinha(item.id)
          setFigAl(album => album.map(
              p => p.numero === item.numero ? { ...p, colada: item } : p
          ))
      },
      canDrop: (item) => item.numero === data.numero,
      collect: (monitor) => ({
          backgroundColor: monitor.isOver() ? 'black' : 'white'
      })
  }), [data.colada])


  if (data.colada) {
    return (
      <div className="col"  ref={dropRef}>
        <div className="card">
          <img className="card-img-top fig_name" src={'http://localhost:8000/imagens/'+ data.file_path} alt="Card cap" />
          <div className="card-body">
            <p className="card-text">{data.nome}</p>
            <p className="card-text">{data.naturalidade}</p>
            <p className="card-text">{data.dtnasc}</p>
          </div>
        </div>
      </div>
    );
  } else {
    return (
      <div className="col" ref={dropRef}>
      <div className="card">
          <div className="card-body n_colada">
              <h2>{data.numero}</h2>
          </div>
      </div>
  </div>
    );
  }
};