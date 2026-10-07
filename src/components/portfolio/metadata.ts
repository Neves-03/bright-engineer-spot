export function portfolioHead(title:string, description:string) {
 return {meta:[{title:`${title} — Diogo Mateus`},{name:'description',content:description},{property:'og:title',content:`${title} — Diogo Mateus`},{property:'og:description',content:description},{property:'og:type',content:'website'},{name:'twitter:card',content:'summary_large_image'}]};
}
