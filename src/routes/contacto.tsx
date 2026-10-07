import { createFileRoute } from '@tanstack/react-router';
import { ContactSection } from '@/components/portfolio/sections';
import { portfolioHead } from '@/components/portfolio/metadata';
export const Route = createFileRoute('/contacto')({head:()=>portfolioHead('Contacto','Entra em contacto com Diogo Mateus através de um formulário de demonstração.'),component:Page});
function Page() { return <div className="page-main"><ContactSection/></div>; }
