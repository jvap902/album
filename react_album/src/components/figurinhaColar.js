import React from "react";
import { useDrag } from "react-dnd";
import { TYPES } from "./types";
// real figurinha
export const FigurinhaColar = ({ data }) => {
    const [{ isDragging, backgroundColor }, dragRef] = useDrag(() => ({
        type: TYPES.FIGURINHA,
        item: data,
        collect: (monitor) => ({
            isDragging: monitor.isDragging(),
            backgroundColor: monitor.isDragging() ? 'black' : 'white'

        })
    }))


    return (
        <div className="col" ref={dragRef}>
            <div className="card">
                <div className="card-body n_colada">
                    <h2>{data.numero}</h2>
                </div>
            </div>
        </div>
    );
};
