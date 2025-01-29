import { Link } from "@inertiajs/react";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faHouse } from "@fortawesome/free-solid-svg-icons";


export default function BottomNavigation() {
    return (
        <div className="bottom-navigation">
            <div>
                <FontAwesomeIcon icon={faHouse} />
                <Link href="/" className="text-xs">Home</Link>
            </div>
            <div>
                <i className="fas fa-file-alt"></i>
                <Link href="/article" className="text-xs">Article</Link>
            </div>
            <div>
                <i className="fas fa-receipt"></i>
                <Link href="/order" className="text-xs">Order</Link>
            </div>
            <div>
                <i className="fas fa-user-circle text-green-500"></i>
                <Link href="/account" className="text-xs text-green-600">Account</Link>
            </div>
        </div>
    );
}