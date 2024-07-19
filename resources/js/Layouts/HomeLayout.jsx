import '../../../public/globals.css';

import LeftBar from '../Components/LeftBar.jsx';



export default function HomeLayout({ children }) {
    return (

            <div className={''} style={{display: 'flex'}}>
                <LeftBar />
                {children}
            </div>
    )
}


