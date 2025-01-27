import BottomNavigation from "../Components/BottomNavigation";

export default function Layout({ children }) {
    return (
        <>
            <main>
                <header>
                    Get more benefit discount up to 85%
                    Download Ultra Voucher App
                </header>
                <article>{children}</article>
                <footer>
                    <BottomNavigation />
                </footer>
            </main>
        </>
    )
}