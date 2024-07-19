'use client'

import React from "react"



export default function ModalWindow({stateValue}) {

    

    return (
        
            <div className='modal-wrapper'>
                <div className="modal-head">
                    <div className="modal-step-counter">
                        <span className="lesson">Урок</span> <span className="modal-step">1</span>
                        <span className="modal-step-length"> / 12</span>
                    </div>

                    <div className="modal-title">
                        <h3>Солнечная система</h3>
                    </div>

                    <div className="modal-close-btn">
                        <button onClick={stateValue}><img src="/img/close.svg" alt="" /></button>
                    </div>
                </div>

                <div className="modal-content">
                    <p className="modal-content-text">
                        Со́лнечная систе́ма — планетная система, включающая в себя центральную звезду Солнце и все естественные космические объекты на гелиоцентрических 
                        орбитах. Она сформировалась путём гравитационного сжатия газопылевого облака примерно 4,57 млрд лет назад[2].
                        Общая масса Солнечной системы составляет около 1,0014 M☉. Бо́льшая часть её приходится на Солнце; оставшаяся часть практически полностью 
                        содержится в восьми отдалённых друг от друга планетах, имеющих близкие к круговым орбиты, лежащие почти в одной плоскости — плоскости эклиптики. 
                        Из-за этого наблюдается противоречащее ожидаемому распределение момента импульса между Солнцем и планетами (так называемая «проблема моментов»): всего 2 % общего 
                        момента системы приходится на долю Солнца, масса которого в ~740 раз больше общей массы планет, а остальные 98 % — на ~0,001 общей массы Солнечной системы[18].
                    </p>
                    <div className="modal-content-images">
                        <img src="/img/content/image.jpeg" alt="" />
                        <img src="/img/content/image1.png" alt="" />
                    </div>
                </div>
            </div>
    )
}