<?php
namespace Modules\Article\Services;

class TemplateService {
    public function all() {
        $dirs = glob( public_path( 'templates/*' ) );
        // dd( public_path( 'templates/*' ) );
        // dd( $dirs );
        foreach ( $dirs as $dir ) {
            if ( $config = $this->parseConfig( $dir ) ) {
                $configs[] = $config;
            }
        }
        return $configs;
    }

    protected function parseConfig( $dir ) {
        $file = $dir.'/package.json';
        if ( is_file( $file ) ) {
            $jsonContent = file_get_contents( $file );
            $config = json_decode( trim( $jsonContent ) );
            // var_dump( $config );
            if ( is_object( $config ) ) {
                $config = ( array )$config;
                // dd( $config );
                $name = basename( $dir );
                // dd( $name );
                $config['preview'] = url( 'templates/'.$name.'/'.$config['preview'] );
                $config['name'] = $name;
                return $config;
            }
        }
    }
}