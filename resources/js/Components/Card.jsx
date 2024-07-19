'use client'

import React from "react"

export default function Card({ name, image, stateValue}) {

    const [disabled, setEnable] = React.useState(true)

    const setModal = () => {
        setEnable(!disabled)
    }

    return (
        <div className="card">
                <h2>{name}</h2>
                <div className="card-image">
                    <img src={`http://127.0.0.1:8000/storage/${image}`} alt={name}/>
                </div>
                <div className="card-button">
                    <button onClick={stateValue}>
                        <span>Изучить</span>
                        <img src="/img/Arrow.svg" alt=""/>
                    </button>
                </div>
            </div>
    )
};
