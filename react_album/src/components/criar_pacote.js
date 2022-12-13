import React, { useEffect, useState } from "react";
import { api } from "../api";

export const CriarPacote = () => {
    const [route_form, setRouteForm] = useState('')
    const [route_btn, setRouteBtn] = useState('')

    useEffect(() => {
        const load = async () => {
            setRouteForm(await api.get("/login"));
            setRouteBtn(await api.get("/pacote/create"));

            console.log(await api.get("/pacote/create"))
        };

        load();
    }, []);

    return (
        <div name="figurinhas" className="pacote">
            <form action={route_form} method="POST">
                <button href={route_btn} className="btn_gerar_pacote">Gerar Pacote</button>
            </form>
        </div>
    );
};
