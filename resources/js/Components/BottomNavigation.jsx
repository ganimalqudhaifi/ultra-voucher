import { Link } from "@inertiajs/react";

export default function BottomNavigation() {
    return (
        <div className="bottom-navigation">
            <div>
                <i className="fas fa-home"></i>
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