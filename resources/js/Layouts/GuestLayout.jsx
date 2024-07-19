import ApplicationLogo from '@/Components/ApplicationLogo';
import '../../../public/css/auth.css'
import { Link } from '@inertiajs/react';

export default function Guest({ children }) {
    return (
        <div className="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#312E8C]">
            <div>
                <Link href="/">
                    <ApplicationLogo className="w-20 h-20 fill-current text-gray-500" />
                </Link>
            </div>

            <div className="w-full sm:max-w-md mt-6 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg" style={{backgroundColor: '#3B38A3'}}>
                {children}
            </div>
        </div>
    );
}
